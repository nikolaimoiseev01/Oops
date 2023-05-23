@extends('layouts.portal')

@section('title')Документы@endsection

@section('content')
    <div class="about_page_wrap">
        <div class="content bread_wrap">
            <a href="{{route('home')}}">
                Главная
            </a>
            <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2.5" cy="2.5" r="2" fill="#212121"/>
            </svg>
            <p>Документы</p>
        </div>

        <div class="content page_cover_wrap">
            <div class="left">
                {{--                <svg width="418" height="106" viewBox="0 0 418 106" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
                {{--                    <path--}}
                {{--                        d="M54.2295 101.49C44.7118 101.49 36.1787 99.3155 28.6302 94.9669C21.1637 90.5363 15.3382 84.7108 11.1537 77.4905C7.05123 70.1881 5 62.4755 5 54.3526C5 46.1477 6.96918 38.2709 10.9075 30.7224C14.8459 23.0918 20.5483 16.8971 28.0148 12.1383C35.4813 7.37943 44.2195 5 54.2295 5C63.9934 5 72.5675 7.25635 79.9519 11.7691C87.3363 16.2818 92.9977 22.3124 96.9361 29.8609C100.874 37.3274 102.844 45.4913 102.844 54.3526C102.844 62.2293 100.874 69.8189 96.9361 77.1212C93.0798 84.3416 87.4594 90.2081 80.075 94.7208C72.6906 99.2335 64.0754 101.49 54.2295 101.49ZM54.3526 85.2441C60.5063 85.2441 66.0036 83.9723 70.8445 81.4288C75.7674 78.8032 79.5827 75.152 82.2903 70.4752C85.08 65.7164 86.4748 60.3422 86.4748 54.3526C86.4748 48.0348 85.162 42.3734 82.5365 37.3684C79.9109 32.3634 76.1366 28.425 71.2137 25.5533C66.2907 22.5995 60.4652 21.1227 53.7372 21.1227C47.5835 21.1227 42.0862 22.5995 37.2453 25.5533C32.4865 28.425 28.7532 32.4044 26.0456 37.4915C23.338 42.5785 21.9842 48.1989 21.9842 54.3526C21.9842 60.7524 23.5431 66.2907 26.661 70.9675C29.8609 75.6443 33.9223 79.2135 38.8453 81.675C43.8503 84.0544 49.0194 85.2441 54.3526 85.2441Z"--}}
                {{--                        fill="#FAC233"/>--}}
                {{--                    <path--}}
                {{--                        d="M165.669 101.49C156.151 101.49 147.618 99.3155 140.07 94.9669C132.603 90.5363 126.778 84.7108 122.593 77.4905C118.491 70.1881 116.439 62.4755 116.439 54.3526C116.439 46.1477 118.409 38.2709 122.347 30.7224C126.285 23.0918 131.988 16.8971 139.454 12.1383C146.921 7.37943 155.659 5 165.669 5C175.433 5 184.007 7.25635 191.391 11.7691C198.776 16.2818 204.437 22.3124 208.376 29.8609C212.314 37.3274 214.283 45.4913 214.283 54.3526C214.283 62.2293 212.314 69.8189 208.376 77.1212C204.519 84.3416 198.899 90.2081 191.514 94.7208C184.13 99.2335 175.515 101.49 165.669 101.49ZM165.792 85.2441C171.946 85.2441 177.443 83.9723 182.284 81.4288C187.207 78.8032 191.022 75.152 193.73 70.4752C196.519 65.7164 197.914 60.3422 197.914 54.3526C197.914 48.0348 196.602 42.3734 193.976 37.3684C191.35 32.3634 187.576 28.425 182.653 25.5533C177.73 22.5995 171.905 21.1227 165.177 21.1227C159.023 21.1227 153.526 22.5995 148.685 25.5533C143.926 28.425 140.193 32.4044 137.485 37.4915C134.777 42.5785 133.424 48.1989 133.424 54.3526C133.424 60.7524 134.983 66.2907 138.1 70.9675C141.3 75.6443 145.362 79.2135 150.285 81.675C155.29 84.0544 160.459 85.2441 165.792 85.2441Z"--}}
                {{--                        fill="#FAC233"/>--}}
                {{--                    <path--}}
                {{--                        d="M54.2295 101.49C44.7118 101.49 36.1787 99.3155 28.6302 94.9669C21.1637 90.5363 15.3382 84.7108 11.1537 77.4905C7.05123 70.1881 5 62.4755 5 54.3526C5 46.1477 6.96918 38.2709 10.9075 30.7224C14.8459 23.0918 20.5483 16.8971 28.0148 12.1383C35.4813 7.37943 44.2195 5 54.2295 5C63.9934 5 72.5675 7.25635 79.9519 11.7691C87.3363 16.2818 92.9977 22.3124 96.9361 29.8609C100.874 37.3274 102.844 45.4913 102.844 54.3526C102.844 62.2293 100.874 69.8189 96.9361 77.1212C93.0798 84.3416 87.4594 90.2081 80.075 94.7208C72.6906 99.2335 64.0754 101.49 54.2295 101.49ZM54.3526 85.2441C60.5063 85.2441 66.0036 83.9723 70.8445 81.4288C75.7674 78.8032 79.5827 75.152 82.2903 70.4752C85.08 65.7164 86.4748 60.3422 86.4748 54.3526C86.4748 48.0348 85.162 42.3734 82.5365 37.3684C79.9109 32.3634 76.1366 28.425 71.2137 25.5533C66.2907 22.5995 60.4652 21.1227 53.7372 21.1227C47.5835 21.1227 42.0862 22.5995 37.2453 25.5533C32.4865 28.425 28.7532 32.4044 26.0456 37.4915C23.338 42.5785 21.9842 48.1989 21.9842 54.3526C21.9842 60.7524 23.5431 66.2907 26.661 70.9675C29.8609 75.6443 33.9223 79.2135 38.8453 81.675C43.8503 84.0544 49.0194 85.2441 54.3526 85.2441Z"--}}
                {{--                        stroke="#FAC233" stroke-width="9"/>--}}
                {{--                    <path--}}
                {{--                        d="M165.669 101.49C156.151 101.49 147.618 99.3155 140.07 94.9669C132.603 90.5363 126.778 84.7108 122.593 77.4905C118.491 70.1881 116.439 62.4755 116.439 54.3526C116.439 46.1477 118.409 38.2709 122.347 30.7224C126.285 23.0918 131.988 16.8971 139.454 12.1383C146.921 7.37943 155.659 5 165.669 5C175.433 5 184.007 7.25635 191.391 11.7691C198.776 16.2818 204.437 22.3124 208.376 29.8609C212.314 37.3274 214.283 45.4913 214.283 54.3526C214.283 62.2293 212.314 69.8189 208.376 77.1212C204.519 84.3416 198.899 90.2081 191.514 94.7208C184.13 99.2335 175.515 101.49 165.669 101.49ZM165.792 85.2441C171.946 85.2441 177.443 83.9723 182.284 81.4288C187.207 78.8032 191.022 75.152 193.73 70.4752C196.519 65.7164 197.914 60.3422 197.914 54.3526C197.914 48.0348 196.602 42.3734 193.976 37.3684C191.35 32.3634 187.576 28.425 182.653 25.5533C177.73 22.5995 171.905 21.1227 165.177 21.1227C159.023 21.1227 153.526 22.5995 148.685 25.5533C143.926 28.425 140.193 32.4044 137.485 37.4915C134.777 42.5785 133.424 48.1989 133.424 54.3526C133.424 60.7524 134.983 66.2907 138.1 70.9675C141.3 75.6443 145.362 79.2135 150.285 81.675C155.29 84.0544 160.459 85.2441 165.792 85.2441Z"--}}
                {{--                        stroke="#FAC233" stroke-width="9"/>--}}
                {{--                    <path--}}
                {{--                        d="M295.358 36.3993C295.358 41.7277 294.177 46.355 291.813 50.2812C289.449 54.2074 286.084 57.2522 281.717 59.4156C277.39 61.5389 272.222 62.6006 266.213 62.6006H241.333V95.5925H229.855V10.9192H265.491C274.986 10.9192 282.338 13.1427 287.546 17.5897C292.754 22.0367 295.358 28.3066 295.358 36.3993ZM283.82 36.5195C283.82 25.5823 277.25 20.1137 264.109 20.1137H241.333V53.5263H264.59C271 53.5263 275.808 52.1241 279.013 49.3197C282.218 46.4752 283.82 42.2085 283.82 36.5195Z"--}}
                {{--                        fill="#FAC233"/>--}}
                {{--                    <path--}}
                {{--                        d="M378.904 72.2157C378.904 80.028 375.84 86.0775 369.71 90.3643C363.62 94.651 355.027 96.7944 343.929 96.7944C323.297 96.7944 311.338 89.6231 308.053 75.2805L319.17 73.057C320.452 78.1451 323.177 81.891 327.343 84.2947C331.51 86.6585 337.179 87.8403 344.35 87.8403C351.762 87.8403 357.471 86.5783 361.477 84.0544C365.523 81.4903 367.547 77.7444 367.547 72.8167C367.547 70.0523 366.906 67.8088 365.624 66.0861C364.382 64.3634 362.619 62.9411 360.335 61.8194C358.052 60.6976 355.327 59.7561 352.162 58.9949C348.997 58.2337 345.492 57.4124 341.646 56.531C337.199 55.5294 333.473 54.5479 330.468 53.5864C327.503 52.6249 325.06 51.6233 323.137 50.5817C321.214 49.5 319.571 48.3582 318.209 47.1563C316.206 45.3134 314.663 43.17 313.582 40.7261C312.54 38.2823 312.019 35.4779 312.019 32.3129C312.019 25.0615 314.783 19.4727 320.312 15.5465C325.881 11.6203 333.833 9.65723 344.17 9.65723C353.785 9.65723 361.136 11.1396 366.224 14.1042C371.312 17.0288 374.878 22.0367 376.921 29.1279L365.624 31.111C364.382 26.6239 362.018 23.3788 358.532 21.3757C355.047 19.3325 350.219 18.3109 344.05 18.3109C337.279 18.3109 332.111 19.4326 328.545 21.6761C324.98 23.9197 323.197 27.2649 323.197 31.712C323.197 34.316 323.878 36.4795 325.24 38.2022C326.642 39.8848 328.645 41.3071 331.249 42.4689C333.693 43.6307 338.881 45.093 346.814 46.8558C350.059 47.617 353.264 48.4183 356.429 49.2596C359.594 50.0608 362.579 51.0824 365.383 52.3244C367.026 53.0055 368.588 53.8468 370.071 54.8484C371.593 55.8099 372.915 56.9317 374.037 58.2137C375.559 59.8963 376.741 61.8794 377.582 64.163C378.464 66.4466 378.904 69.1309 378.904 72.2157Z"--}}
                {{--                        fill="#FAC233"/>--}}
                {{--                    <path--}}
                {{--                        d="M295.358 36.3993C295.358 41.7277 294.177 46.355 291.813 50.2812C289.449 54.2074 286.084 57.2522 281.717 59.4156C277.39 61.5389 272.222 62.6006 266.213 62.6006H241.333V95.5925H229.855V10.9192H265.491C274.986 10.9192 282.338 13.1427 287.546 17.5897C292.754 22.0367 295.358 28.3066 295.358 36.3993ZM283.82 36.5195C283.82 25.5823 277.25 20.1137 264.109 20.1137H241.333V53.5263H264.59C271 53.5263 275.808 52.1241 279.013 49.3197C282.218 46.4752 283.82 42.2085 283.82 36.5195Z"--}}
                {{--                        stroke="#FAC233" stroke-width="15"/>--}}
                {{--                    <path--}}
                {{--                        d="M378.904 72.2157C378.904 80.028 375.84 86.0775 369.71 90.3643C363.62 94.651 355.027 96.7944 343.929 96.7944C323.297 96.7944 311.338 89.6231 308.053 75.2805L319.17 73.057C320.452 78.1451 323.177 81.891 327.343 84.2947C331.51 86.6585 337.179 87.8403 344.35 87.8403C351.762 87.8403 357.471 86.5783 361.477 84.0544C365.523 81.4903 367.547 77.7444 367.547 72.8167C367.547 70.0523 366.906 67.8088 365.624 66.0861C364.382 64.3634 362.619 62.9411 360.335 61.8194C358.052 60.6976 355.327 59.7561 352.162 58.9949C348.997 58.2337 345.492 57.4124 341.646 56.531C337.199 55.5294 333.473 54.5479 330.468 53.5864C327.503 52.6249 325.06 51.6233 323.137 50.5817C321.214 49.5 319.571 48.3582 318.209 47.1563C316.206 45.3134 314.663 43.17 313.582 40.7261C312.54 38.2823 312.019 35.4779 312.019 32.3129C312.019 25.0615 314.783 19.4727 320.312 15.5465C325.881 11.6203 333.833 9.65723 344.17 9.65723C353.785 9.65723 361.136 11.1396 366.224 14.1042C371.312 17.0288 374.878 22.0367 376.921 29.1279L365.624 31.111C364.382 26.6239 362.018 23.3788 358.532 21.3757C355.047 19.3325 350.219 18.3109 344.05 18.3109C337.279 18.3109 332.111 19.4326 328.545 21.6761C324.98 23.9197 323.197 27.2649 323.197 31.712C323.197 34.316 323.878 36.4795 325.24 38.2022C326.642 39.8848 328.645 41.3071 331.249 42.4689C333.693 43.6307 338.881 45.093 346.814 46.8558C350.059 47.617 353.264 48.4183 356.429 49.2596C359.594 50.0608 362.579 51.0824 365.383 52.3244C367.026 53.0055 368.588 53.8468 370.071 54.8484C371.593 55.8099 372.915 56.9317 374.037 58.2137C375.559 59.8963 376.741 61.8794 377.582 64.163C378.464 66.4466 378.904 69.1309 378.904 72.2157Z"--}}
                {{--                        stroke="#FAC233" stroke-width="15"/>--}}
                {{--                    <path--}}
                {{--                        d="M414.5 10.9811L414.561 8.42188H412.001H400.222H397.662L397.723 10.9811L399.165 71.7969L399.223 74.2376H401.664H410.558H413L413.058 71.7969L414.5 10.9811ZM414.26 83.5162V81.0162H411.76H400.102H397.602V83.5162V95.5952V98.0952H400.102H411.76H414.26V95.5952V83.5162Z"--}}
                {{--                        fill="#FAC233" stroke="#FAC233" stroke-width="5"/>--}}
                {{--                </svg>--}}

                <h2>Документы</h2>

                <p>
                    Компания в течение 20 лет занималась производством дезинфицирующих средств, и это огромный опыт, который объясняет, почему бренд OOPS получился премиального качества.
                </p>
            </div>
            <img src="/media/media_fixed/about_cover.png" alt="">
        </div>
        <livewire:consultation-form/>
    </div>


@endsection
