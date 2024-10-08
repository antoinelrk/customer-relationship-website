<main class="conversations-page">
    <div class="centered">
        <?php require('../app/Views/components/conversations_list.php'); ?>

        <section class="conversation-wrapper">
            <div class="header">
                <div class="user-infos">
                    <img src="<?= $selectedConversation->relations['user']->avatar ?>" alt=""
                         class="profile-picture">
                    <span>
                        <?= htmlspecialchars($selectedConversation->relations['user']->username) ?>
                    </span>
                </div>
            </div>

            <div class="conversations-messages">
                <ul class="messages-list">
                    <?php foreach ($selectedConversation->relations[0]['messages'] as $key => $message): ?>
                        <li class="message <?= \App\Core\Auth\Auth::user()->id === $message->relations[0]['user']->id ? 'me' : '' ?>">
                            <!-- Si le message précédent contient le même user tu mets pas ce bloc -->
                            <?php if ($key === 0 || ($key > 0 && $selectedConversation->relations[0]['messages'][$key - 1]->receiver_id === $message->user_id)): ?>
                                <div class="metadata">
                                    <img src="<?= $message->relations[0]['user']->avatar ?>" alt=""
                                         class="mini-profile-picture">
                                    <span class="date"><?= \App\Helpers\Diamond::diffForHumans($message->created_at, true) ?></span>
                                </div>
                            <?php endif; ?>

                            <p class="message-content">
                                <?= htmlspecialchars($message->content) ?>
                            </p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <form
                class="message-sender"
                action="/messages/store"
                method="POST"
            >
                <?= \App\Core\Http\Csrf::template() ?>
                <input type="hidden" name="conversation_id" value="<?= $selectedConversation->id ?>">
                <input type="hidden" name="uuid" value="<?= $selectedConversation->uuid ?>">
                <input type="hidden" name="receiver_id" value="<?= $selectedConversation->relations[0]['user']->id ?>">

                <label>
                    <input type="text" name="content" placeholder="Taper votre message ici" autofocus>
                </label>

                <button class="btn btn-send">Envoyer</button>
            </form>
        </section>
    </div>
</main>
