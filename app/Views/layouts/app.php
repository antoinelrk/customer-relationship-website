<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./../css/app.css">
    <script src="./../js/app.js" defer></script>
    <title><?= $title ?></title>
</head>
<body>
<div id="app">
    <header>
        <div class="centered">
            <div class="left">
                <div class="app-logo">
                    <figure>
                        <svg width="100%" height="100%" viewBox="0 0 155 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="51" height="51" rx="8.5" fill="#00AC66"/>
                            <path d="M8.59565 18.512C8.64348 18.0896 8.6674 17.5037 8.6674 16.7544C8.6674 15.3275 8.6116 13.7094 8.5 11.8999C10.0544 11.9477 12.7248 11.9716 16.5111 11.9716C20.2815 11.9716 22.9399 11.9477 24.4863 11.8999C24.3747 13.7094 24.3189 15.3275 24.3189 16.7544C24.3189 17.5037 24.3428 18.0896 24.3907 18.512H23.8287C23.2946 16.3678 22.6011 14.8253 21.7482 13.8847C20.9033 12.9362 19.9905 12.4619 19.0101 12.4619H18.9862V26.4753C18.9862 27.1608 19.0539 27.659 19.1894 27.9699C19.3329 28.2808 19.588 28.4881 19.9547 28.5917C20.3214 28.6953 20.9033 28.7471 21.7004 28.7471V29.2374C19.4047 29.1895 17.6151 29.1656 16.3317 29.1656C15.1759 29.1656 13.498 29.1895 11.2979 29.2374V28.7471C12.095 28.7471 12.6769 28.6953 13.0436 28.5917C13.4103 28.4881 13.6614 28.2808 13.7969 27.9699C13.9404 27.659 14.0121 27.1608 14.0121 26.4753V12.4619H13.9882C12.9918 12.4619 12.0711 12.9322 11.2262 13.8728C10.3892 14.8054 9.69967 16.3518 9.15763 18.512H8.59565Z" fill="white"/>
                            <path d="M24.9209 26.6746C24.9687 26.2522 24.9926 25.6663 24.9926 24.917C24.9926 23.4901 24.9368 21.872 24.8252 20.0625C26.3796 20.1103 29.05 20.1342 32.8363 20.1342C36.6067 20.1342 39.2651 20.1103 40.8115 20.0625C40.6999 21.872 40.6441 23.4901 40.6441 24.917C40.6441 25.6663 40.668 26.2522 40.7159 26.6746H40.1539C39.6198 24.5304 38.9263 22.9879 38.0734 22.0473C37.2284 21.0988 36.3157 20.6245 35.3353 20.6245H35.3114V34.6379C35.3114 35.3234 35.3791 35.8216 35.5146 36.1325C35.6581 36.4434 35.9132 36.6507 36.2799 36.7543C36.6465 36.8579 37.2284 36.9097 38.0256 36.9097V37.4C35.7299 37.3521 33.9403 37.3282 32.6569 37.3282C31.5011 37.3282 29.8232 37.3521 27.6231 37.4V36.9097C28.4202 36.9097 29.0021 36.8579 29.3688 36.7543C29.7355 36.6507 29.9866 36.4434 30.1221 36.1325C30.2656 35.8216 30.3373 35.3234 30.3373 34.6379V20.6245H30.3134C29.317 20.6245 28.3963 21.0948 27.5514 22.0354C26.7144 22.968 26.0249 24.5144 25.4828 26.6746H24.9209Z" fill="white"/>
                            <path d="M78.52 17.84C78.4667 18.4533 78.4267 19.0533 78.4 19.64C78.3867 20.2133 78.38 20.6533 78.38 20.96C78.38 21.2667 78.3867 21.5533 78.4 21.82C78.4133 22.0867 78.4267 22.32 78.44 22.52H77.98C77.7933 21.4533 77.5667 20.62 77.3 20.02C77.0333 19.4067 76.68 18.9667 76.24 18.7C75.8133 18.4333 75.2467 18.3 74.54 18.3H73.9V29.7C73.9 30.2467 73.9467 30.6533 74.04 30.92C74.1467 31.1867 74.3533 31.3667 74.66 31.46C74.9667 31.54 75.4133 31.5867 76 31.6V32C75.6 31.9733 75.08 31.96 74.44 31.96C73.8 31.9467 73.1467 31.94 72.48 31.94C71.7867 31.94 71.1333 31.9467 70.52 31.96C69.92 31.96 69.4333 31.9733 69.06 32V31.6C69.6333 31.5867 70.0733 31.54 70.38 31.46C70.6867 31.3667 70.8933 31.1867 71 30.92C71.1067 30.6533 71.16 30.2467 71.16 29.7V18.3H70.5C69.8067 18.3 69.24 18.4333 68.8 18.7C68.36 18.9667 68.0067 19.4067 67.74 20.02C67.4733 20.62 67.2533 21.4533 67.08 22.52H66.62C66.6467 22.32 66.66 22.0867 66.66 21.82C66.6733 21.5533 66.68 21.2667 66.68 20.96C66.68 20.6533 66.6667 20.2133 66.64 19.64C66.6267 19.0533 66.5933 18.4533 66.54 17.84C67.1267 17.8533 67.7733 17.8667 68.48 17.88C69.1867 17.8933 69.8933 17.9 70.6 17.9C71.3067 17.9 71.9533 17.9 72.54 17.9C73.1133 17.9 73.7533 17.9 74.46 17.9C75.1667 17.9 75.8733 17.8933 76.58 17.88C77.2867 17.8667 77.9333 17.8533 78.52 17.84ZM83.807 21.38C84.727 21.38 85.5404 21.5667 86.247 21.94C86.967 22.3 87.5337 22.88 87.947 23.68C88.3737 24.48 88.587 25.5333 88.587 26.84C88.587 28.1467 88.3737 29.2 87.947 30C87.5337 30.8 86.967 31.38 86.247 31.74C85.5404 32.1 84.727 32.28 83.807 32.28C82.887 32.28 82.067 32.1 81.347 31.74C80.627 31.38 80.0604 30.8 79.647 30C79.2337 29.2 79.027 28.1467 79.027 26.84C79.027 25.5333 79.2337 24.48 79.647 23.68C80.0604 22.88 80.627 22.3 81.347 21.94C82.067 21.5667 82.887 21.38 83.807 21.38ZM83.807 21.78C83.1804 21.78 82.667 22.18 82.267 22.98C81.8804 23.7667 81.687 25.0533 81.687 26.84C81.687 28.6267 81.8804 29.9133 82.267 30.7C82.667 31.4867 83.1804 31.88 83.807 31.88C84.4204 31.88 84.927 31.4867 85.327 30.7C85.727 29.9133 85.927 28.6267 85.927 26.84C85.927 25.0533 85.727 23.7667 85.327 22.98C84.927 22.18 84.4204 21.78 83.807 21.78ZM96.9389 21.38C97.4589 21.38 97.8922 21.4533 98.2389 21.6C98.5989 21.7467 98.8789 21.9333 99.0789 22.16C99.3189 22.4133 99.4856 22.7533 99.5789 23.18C99.6722 23.5933 99.7189 24.12 99.7189 24.76V30.14C99.7189 30.7 99.8122 31.08 99.9989 31.28C100.199 31.48 100.532 31.58 100.999 31.58V32C100.759 31.9867 100.399 31.9733 99.9189 31.96C99.4389 31.9333 98.9722 31.92 98.5189 31.92C98.0389 31.92 97.5722 31.9333 97.1189 31.96C96.6789 31.9733 96.3456 31.9867 96.1189 32V31.58C96.5056 31.58 96.7789 31.48 96.9389 31.28C97.1122 31.08 97.1989 30.7 97.1989 30.14V24.08C97.1989 23.72 97.1722 23.4 97.1189 23.12C97.0656 22.8267 96.9522 22.6 96.7789 22.44C96.6056 22.2667 96.3389 22.18 95.9789 22.18C95.5656 22.18 95.1922 22.3 94.8589 22.54C94.5256 22.78 94.2589 23.1133 94.0589 23.54C93.8722 23.9533 93.7789 24.42 93.7789 24.94V30.14C93.7789 30.7 93.8589 31.08 94.0189 31.28C94.1789 31.48 94.4589 31.58 94.8589 31.58V32C94.6322 31.9867 94.2989 31.9733 93.8589 31.96C93.4322 31.9333 92.9922 31.92 92.5389 31.92C92.0456 31.92 91.5456 31.9333 91.0389 31.96C90.5322 31.9733 90.1522 31.9867 89.8989 32V31.58C90.3922 31.58 90.7389 31.48 90.9389 31.28C91.1522 31.08 91.2589 30.7 91.2589 30.14V23.84C91.2589 23.24 91.1589 22.8 90.9589 22.52C90.7722 22.2267 90.4189 22.08 89.8989 22.08V21.66C90.3256 21.7 90.7389 21.72 91.1389 21.72C91.6322 21.72 92.0989 21.7 92.5389 21.66C92.9922 21.6067 93.4056 21.5333 93.7789 21.44V23.44C94.1122 22.7067 94.5589 22.18 95.1189 21.86C95.6789 21.54 96.2856 21.38 96.9389 21.38ZM102.959 21.38C103.479 21.38 103.912 21.4533 104.259 21.6C104.619 21.7467 104.899 21.9333 105.099 22.16C105.339 22.4133 105.506 22.7533 105.599 23.18C105.692 23.5933 105.739 24.12 105.739 24.76V30.14C105.739 30.7 105.839 31.08 106.039 31.28C106.252 31.48 106.606 31.58 107.099 31.58V32C106.859 31.9867 106.486 31.9733 105.979 31.96C105.486 31.9333 105.006 31.92 104.539 31.92C104.059 31.92 103.592 31.9333 103.139 31.96C102.699 31.9733 102.366 31.9867 102.139 32V31.58C102.526 31.58 102.799 31.48 102.959 31.28C103.132 31.08 103.219 30.7 103.219 30.14V24.08C103.219 23.72 103.186 23.4 103.119 23.12C103.066 22.8267 102.946 22.6 102.759 22.44C102.572 22.2667 102.292 22.18 101.919 22.18C101.506 22.18 101.132 22.3067 100.799 22.56C100.466 22.8133 100.199 23.1533 99.9989 23.58C99.8122 23.9933 99.7122 24.46 99.6989 24.98L99.5989 23.54C99.9589 22.7133 100.439 22.1467 101.039 21.84C101.639 21.5333 102.279 21.38 102.959 21.38ZM124.184 17.84C124.131 18.4533 124.091 19.0533 124.064 19.64C124.051 20.2133 124.044 20.6533 124.044 20.96C124.044 21.2667 124.051 21.5533 124.064 21.82C124.077 22.0867 124.091 22.32 124.104 22.52H123.644C123.457 21.4533 123.231 20.62 122.964 20.02C122.697 19.4067 122.344 18.9667 121.904 18.7C121.477 18.4333 120.911 18.3 120.204 18.3H119.564V29.7C119.564 30.2467 119.611 30.6533 119.704 30.92C119.811 31.1867 120.017 31.3667 120.324 31.46C120.631 31.54 121.077 31.5867 121.664 31.6V32C121.264 31.9733 120.744 31.96 120.104 31.96C119.464 31.9467 118.811 31.94 118.144 31.94C117.451 31.94 116.797 31.9467 116.184 31.96C115.584 31.96 115.097 31.9733 114.724 32V31.6C115.297 31.5867 115.737 31.54 116.044 31.46C116.351 31.3667 116.557 31.1867 116.664 30.92C116.771 30.6533 116.824 30.2467 116.824 29.7V18.3H116.164C115.471 18.3 114.904 18.4333 114.464 18.7C114.024 18.9667 113.671 19.4067 113.404 20.02C113.137 20.62 112.917 21.4533 112.744 22.52H112.284C112.311 22.32 112.324 22.0867 112.324 21.82C112.337 21.5533 112.344 21.2667 112.344 20.96C112.344 20.6533 112.331 20.2133 112.304 19.64C112.291 19.0533 112.257 18.4533 112.204 17.84C112.791 17.8533 113.437 17.8667 114.144 17.88C114.851 17.8933 115.557 17.9 116.264 17.9C116.971 17.9 117.617 17.9 118.204 17.9C118.777 17.9 119.417 17.9 120.124 17.9C120.831 17.9 121.537 17.8933 122.244 17.88C122.951 17.8667 123.597 17.8533 124.184 17.84ZM131.871 21.38C132.284 21.38 132.624 21.4667 132.891 21.64C133.171 21.8133 133.378 22.0333 133.511 22.3C133.644 22.5667 133.711 22.8467 133.711 23.14C133.711 23.58 133.578 23.9467 133.311 24.24C133.058 24.5333 132.718 24.68 132.291 24.68C131.891 24.68 131.564 24.5733 131.311 24.36C131.058 24.1467 130.931 23.8533 130.931 23.48C130.931 23.1467 131.011 22.8667 131.171 22.64C131.344 22.4133 131.538 22.2333 131.751 22.1C131.604 22.02 131.438 21.9933 131.251 22.02C130.931 22.0467 130.638 22.16 130.371 22.36C130.104 22.56 129.878 22.8067 129.691 23.1C129.504 23.3933 129.358 23.7067 129.251 24.04C129.158 24.3733 129.111 24.6933 129.111 25V29.94C129.111 30.5933 129.278 31.0333 129.611 31.26C129.944 31.4733 130.431 31.58 131.071 31.58V32C130.764 31.9867 130.318 31.9733 129.731 31.96C129.158 31.9333 128.558 31.92 127.931 31.92C127.411 31.92 126.891 31.9333 126.371 31.96C125.864 31.9733 125.484 31.9867 125.231 32V31.58C125.724 31.58 126.071 31.48 126.271 31.28C126.484 31.08 126.591 30.7 126.591 30.14V23.84C126.591 23.24 126.491 22.8 126.291 22.52C126.104 22.2267 125.751 22.08 125.231 22.08V21.66C125.658 21.7 126.071 21.72 126.471 21.72C126.964 21.72 127.431 21.7 127.871 21.66C128.324 21.6067 128.738 21.5333 129.111 21.44V23.52C129.271 23.1467 129.478 22.8 129.731 22.48C129.998 22.16 130.311 21.9 130.671 21.7C131.044 21.4867 131.444 21.38 131.871 21.38ZM139.178 21.38C140.098 21.38 140.911 21.5667 141.618 21.94C142.338 22.3 142.905 22.88 143.318 23.68C143.745 24.48 143.958 25.5333 143.958 26.84C143.958 28.1467 143.745 29.2 143.318 30C142.905 30.8 142.338 31.38 141.618 31.74C140.911 32.1 140.098 32.28 139.178 32.28C138.258 32.28 137.438 32.1 136.718 31.74C135.998 31.38 135.431 30.8 135.018 30C134.605 29.2 134.398 28.1467 134.398 26.84C134.398 25.5333 134.605 24.48 135.018 23.68C135.431 22.88 135.998 22.3 136.718 21.94C137.438 21.5667 138.258 21.38 139.178 21.38ZM139.178 21.78C138.551 21.78 138.038 22.18 137.638 22.98C137.251 23.7667 137.058 25.0533 137.058 26.84C137.058 28.6267 137.251 29.9133 137.638 30.7C138.038 31.4867 138.551 31.88 139.178 31.88C139.791 31.88 140.298 31.4867 140.698 30.7C141.098 29.9133 141.298 28.6267 141.298 26.84C141.298 25.0533 141.098 23.7667 140.698 22.98C140.298 22.18 139.791 21.78 139.178 21.78ZM150.39 21.38C150.883 21.38 151.337 21.44 151.75 21.56C152.177 21.6667 152.543 21.82 152.85 22.02C153.17 22.22 153.423 22.4733 153.61 22.78C153.797 23.0733 153.89 23.4 153.89 23.76C153.89 24.2 153.757 24.5533 153.49 24.82C153.223 25.0867 152.89 25.22 152.49 25.22C152.077 25.22 151.737 25.1 151.47 24.86C151.217 24.62 151.09 24.3 151.09 23.9C151.09 23.5133 151.203 23.1933 151.43 22.94C151.657 22.6867 151.93 22.52 152.25 22.44C152.13 22.2667 151.943 22.1267 151.69 22.02C151.437 21.9 151.157 21.84 150.85 21.84C150.45 21.84 150.09 21.9467 149.77 22.16C149.45 22.36 149.17 22.6667 148.93 23.08C148.703 23.48 148.523 23.98 148.39 24.58C148.27 25.1667 148.21 25.8467 148.21 26.62C148.21 27.7 148.337 28.5533 148.59 29.18C148.857 29.8067 149.197 30.2533 149.61 30.52C150.023 30.7733 150.463 30.9 150.93 30.9C151.21 30.9 151.51 30.8467 151.83 30.74C152.15 30.6333 152.463 30.4533 152.77 30.2C153.09 29.9467 153.377 29.5867 153.63 29.12L154.01 29.26C153.863 29.7267 153.623 30.1933 153.29 30.66C152.97 31.1267 152.55 31.5133 152.03 31.82C151.51 32.1267 150.877 32.28 150.13 32.28C149.277 32.28 148.503 32.0867 147.81 31.7C147.117 31.3 146.563 30.7 146.15 29.9C145.75 29.1 145.55 28.1067 145.55 26.92C145.55 25.7467 145.757 24.7533 146.17 23.94C146.583 23.1133 147.157 22.48 147.89 22.04C148.637 21.6 149.47 21.38 150.39 21.38Z" fill="#00AC66"/>
                        </svg>
                    </figure>
                </div>
                <nav>
                    <ul>
                        <li>
                            <a class="active" href="">Accueil</a>
                        </li>
                        <li>
                            <a href="">Nos livres à l'échange</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="right">
                <nav>
                    <ul>
                        <li></li>
                        <li>
                            <a href="">
                                <div class="icon">
                                    <figure>
                                        <svg width="100%" height="100%" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.5342 10.8594L12.3182 11.0439L12.4441 11.2822V12.7332L11.1804 12.0036L11.0119 11.8558L10.8037 11.9494C9.81713 12.3931 8.6938 12.645 7.5 12.645C3.50458 12.645 0.355 9.84779 0.355 6.5C0.355 3.15221 3.50458 0.355 7.5 0.355C11.4954 0.355 14.645 3.15221 14.645 6.5C14.645 8.19467 13.8458 9.73885 12.5342 10.8594ZM11.1765 12.0014C11.1765 12.0014 11.1766 12.0014 11.1766 12.0014L11.1765 12.0014L11.1765 12.0014Z" stroke="#292929" stroke-width="0.71"/>
                                        </svg>
                                    </figure>
                                </div>
                                Messagerie
                                <span>
                    0
                  </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="icon">
                                    <figure>
                                        <svg width="100%" height="100%" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <mask id="path-1-inside-1_2247_31" fill="white">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.42801 9.28571C7.99219 9.28571 10.0709 7.20704 10.0709 4.64286C10.0709 2.07868 7.99219 0 5.42801 0C2.86383 0 0.785156 2.07868 0.785156 4.64286C0.785156 7.20704 2.86383 9.28571 5.42801 9.28571ZM5.42801 9.28571C2.86383 9.28571 0.785156 10.1172 0.785156 11.1429C0.785156 12.1685 2.86383 13 5.42801 13C7.99219 13 10.0709 12.1685 10.0709 11.1429C10.0709 10.1172 7.99219 9.28571 5.42801 9.28571Z"/>
                                            </mask>
                                            <path d="M9.36087 4.64286C9.36087 6.81491 7.60007 8.57571 5.42801 8.57571V9.99571C8.38431 9.99571 10.7809 7.59916 10.7809 4.64286H9.36087ZM5.42801 0.71C7.60007 0.71 9.36087 2.4708 9.36087 4.64286H10.7809C10.7809 1.68656 8.38431 -0.71 5.42801 -0.71V0.71ZM1.49516 4.64286C1.49516 2.4708 3.25596 0.71 5.42801 0.71V-0.71C2.47171 -0.71 0.0751563 1.68656 0.0751563 4.64286H1.49516ZM5.42801 8.57571C3.25596 8.57571 1.49516 6.81491 1.49516 4.64286H0.0751563C0.0751563 7.59916 2.47171 9.99571 5.42801 9.99571V8.57571ZM5.42801 8.57571C4.07872 8.57571 2.82447 8.79318 1.88133 9.17044C1.41173 9.35828 0.984055 9.59971 0.662168 9.90412C0.338782 10.2099 0.0751563 10.6283 0.0751563 11.1429H1.49516C1.49516 11.1387 1.49538 11.1236 1.51157 11.0919C1.52924 11.0574 1.56597 11.0038 1.63786 10.9358C1.78586 10.7959 2.03811 10.6371 2.4087 10.4889C3.14595 10.194 4.21313 9.99571 5.42801 9.99571V8.57571ZM0.0751563 11.1429C0.0751563 11.6574 0.338783 12.0758 0.662168 12.3816C0.984055 12.686 1.41173 12.9274 1.88133 13.1153C2.82447 13.4925 4.07872 13.71 5.42801 13.71V12.29C4.21313 12.29 3.14595 12.0917 2.4087 11.7968C2.03811 11.6486 1.78586 11.4898 1.63786 11.3499C1.56597 11.2819 1.52924 11.2283 1.51157 11.1938C1.49538 11.1621 1.49516 11.147 1.49516 11.1429H0.0751563ZM5.42801 13.71C6.77731 13.71 8.03156 13.4925 8.9747 13.1153C9.4443 12.9274 9.87197 12.686 10.1939 12.3816C10.5172 12.0758 10.7809 11.6574 10.7809 11.1429H9.36087C9.36087 11.147 9.36064 11.1621 9.34445 11.1938C9.32679 11.2283 9.29005 11.2819 9.21817 11.3499C9.07017 11.4898 8.81791 11.6486 8.44732 11.7968C7.71008 12.0917 6.6429 12.29 5.42801 12.29V13.71ZM10.7809 11.1429C10.7809 10.6283 10.5172 10.2099 10.1939 9.90412C9.87197 9.59971 9.4443 9.35828 8.9747 9.17044C8.03156 8.79318 6.77731 8.57571 5.42801 8.57571V9.99571C6.6429 9.99571 7.71008 10.194 8.44732 10.4889C8.81791 10.6371 9.07017 10.7959 9.21817 10.9358C9.29005 11.0038 9.32679 11.0574 9.34445 11.0919C9.36064 11.1236 9.36087 11.1387 9.36087 11.1429H10.7809Z" fill="#292929" mask="url(#path-1-inside-1_2247_31)"/>
                                        </svg>

                                    </figure>
                                </div>
                                Mon compte
                            </a>
                        </li>
                        <li>
                            <a href="">Connexion</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <?= $content ?>

    <footer>
        <ul class="footer-navigation">
            <li>
                <a href="">
                    Politique de confidentialité
                </a>
            </li>

            <li>
                <a href="">
                    Mentions légales
                </a>
            </li>

            <li>
                <a href="">
                    TomTroc ©
                </a>
            </li>

            <li>
                <a href="">
                    <figure>
                        <svg width="100%" height="100%" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.0651287 4.50202C0.0976931 4.21437 0.113975 3.81546 0.113975 3.30528C0.113975 2.33378 0.0759835 1.23202 0 0C1.05834 0.0325644 2.87652 0.0488465 5.45453 0.0488465C8.02169 0.0488465 9.83172 0.0325644 10.8846 0C10.8087 1.23202 10.7707 2.33378 10.7707 3.30528C10.7707 3.81546 10.7869 4.21437 10.8195 4.50202H10.4369C10.0732 3.04205 9.60106 1.99185 9.02033 1.35142C8.44502 0.705561 7.82359 0.382631 7.15602 0.382631H7.13974V9.92399C7.13974 10.3907 7.18587 10.73 7.27813 10.9416C7.37583 11.1533 7.5495 11.2944 7.79916 11.365C8.04882 11.4355 8.44502 11.4708 8.98776 11.4708V11.8046C7.42467 11.772 6.20622 11.7557 5.33241 11.7557C4.54544 11.7557 3.40298 11.772 1.90501 11.8046V11.4708C2.44775 11.4708 2.84395 11.4355 3.09361 11.365C3.34327 11.2944 3.51424 11.1533 3.6065 10.9416C3.7042 10.73 3.75304 10.3907 3.75304 9.92399V0.382631H3.73676C3.05834 0.382631 2.43147 0.702847 1.85617 1.34328C1.28629 1.97828 0.816823 3.0312 0.44776 4.50202H0.0651287Z" fill="#00AC66"/>
                            <path d="M11.1804 10.0596C11.2129 9.77199 11.2292 9.37307 11.2292 8.8629C11.2292 7.8914 11.1912 6.78964 11.1152 5.55762C12.1736 5.59018 13.9918 5.60646 16.5698 5.60646C19.1369 5.60646 20.947 5.59018 21.9999 5.55762C21.9239 6.78964 21.8859 7.8914 21.8859 8.8629C21.8859 9.37307 21.9022 9.77199 21.9347 10.0596H21.5521C21.1885 8.59967 20.7163 7.54947 20.1356 6.90904C19.5603 6.26318 18.9388 5.94025 18.2713 5.94025H18.255V15.4816C18.255 15.9484 18.3011 16.2876 18.3934 16.4992C18.4911 16.7109 18.6647 16.852 18.9144 16.9226C19.1641 16.9931 19.5603 17.0284 20.103 17.0284V17.3622C18.5399 17.3296 17.3215 17.3134 16.4476 17.3134C15.6607 17.3134 14.5182 17.3296 13.0202 17.3622V17.0284C13.563 17.0284 13.9592 16.9931 14.2088 16.9226C14.4585 16.852 14.6295 16.7109 14.7217 16.4992C14.8194 16.2876 14.8683 15.9484 14.8683 15.4816V5.94025H14.852C14.1736 5.94025 13.5467 6.26046 12.9714 6.9009C12.4015 7.5359 11.9321 8.58882 11.563 10.0596H11.1804Z" fill="#00AC66"/>
                        </svg>
                    </figure>
                </a>
            </li>
        </ul>
    </footer>
</div>
</body>
</html>
