<nav class="font-semibold text-lg flex flex-row items-center fixed bg-white px-10 h-20 w-full z-20 shadow-md font-poppins ">
    <a href="">
        <img src="{{ asset('picture/logo.png') }}" class="w-[95px] h-[50px]" alt="Logo">
    </a>
    <div class="flex w-full justify-between">
        <div class="flex flex-row justify-start items-center space-x-6 pl-10">
            <a href="/home">Home</a>
            <a href="/trip">Trips</a>
            <a href="/rents">Rents</a>
            <a href="/blog">Blog</a>
            <a href="/gallery">Galery</a>
            <!-- <a href="">About</a> -->
        </div>
        <div class="flex flex-row justify-end items-center space-x-10">
            <a href="">
                <svg width="31" height="30" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.75 45C12.5125 45 11.4535 44.5597 10.573 43.6792C9.6925 42.7988 9.2515 41.739 9.25 40.5C9.2485 39.261 9.6895 38.202 10.573 37.323C11.4565 36.444 12.5155 36.003 13.75 36C14.9845 35.997 16.0443 36.438 16.9293 37.323C17.8143 38.208 18.2545 39.267 18.25 40.5C18.2455 41.733 17.8053 42.7928 16.9293 43.6792C16.0533 44.5658 14.9935 45.006 13.75 45ZM36.25 45C35.0125 45 33.9535 44.5597 33.073 43.6792C32.1925 42.7988 31.7515 41.739 31.75 40.5C31.7485 39.261 32.1895 38.202 33.073 37.323C33.9565 36.444 35.0155 36.003 36.25 36C37.4845 35.997 38.5443 36.438 39.4292 37.323C40.3143 38.208 40.7545 39.267 40.75 40.5C40.7455 41.733 40.3053 42.7928 39.4292 43.6792C38.5532 44.5658 37.4935 45.006 36.25 45ZM9.7 4.5H42.8875C43.75 4.5 44.4062 4.88475 44.8563 5.65425C45.3063 6.42375 45.325 7.2015 44.9125 7.9875L36.925 22.3875C36.5125 23.1375 35.9598 23.7188 35.2668 24.1313C34.5737 24.5438 33.814 24.75 32.9875 24.75H16.225L13.75 29.25H40.75V33.75H13.75C12.0625 33.75 10.7875 33.0098 9.925 31.5293C9.0625 30.0488 9.025 28.5765 9.8125 27.1125L12.85 21.6L4.75 4.5H0.25V0H7.5625L9.7 4.5Z" fill="black" />
                </svg>
            </a>
            <a href="">
                <svg width="29" height="30" viewBox="0 0 52 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.1125 39.675C12.3084 37.9958 14.7625 36.6723 17.475 35.7044C20.1875 34.7365 23.0292 34.2517 26 34.25C28.9709 34.2483 31.8125 34.7331 34.525 35.7044C37.2375 36.6757 39.6917 37.9993 41.8875 39.675C43.3945 37.9097 44.5682 35.9076 45.4086 33.6687C46.2491 31.4298 46.6684 29.0403 46.6667 26.5C46.6667 20.7736 44.6543 15.8971 40.6294 11.8706C36.6046 7.84402 31.7281 5.8316 26 5.83332C20.2719 5.83505 15.3954 7.84832 11.3706 11.8732C7.34577 15.898 5.33336 20.7736 5.33336 26.5C5.33336 29.0403 5.75358 31.4298 6.59402 33.6687C7.43447 35.9076 8.6073 37.9097 10.1125 39.675ZM26 29.0833C23.4597 29.0833 21.3173 28.2119 19.5727 26.469C17.8281 24.7261 16.9566 22.5837 16.9584 20.0417C16.9601 17.4997 17.8324 15.3572 19.5753 13.6143C21.3182 11.8714 23.4597 11 26 11C28.5403 11 30.6827 11.8723 32.4274 13.6169C34.172 15.3615 35.0434 17.5031 35.0417 20.0417C35.04 22.5802 34.1685 24.7227 32.4274 26.469C30.6862 28.2153 28.5437 29.0868 26 29.0833ZM26 52.3333C22.4264 52.3333 19.0681 51.6548 15.925 50.2977C12.782 48.9405 10.0479 47.1004 7.72294 44.7771C5.39794 42.4538 3.55775 39.7198 2.20236 36.575C0.846968 33.4302 0.168413 30.0719 0.16669 26.5C0.164968 22.9281 0.843524 19.5698 2.20236 16.425C3.56119 13.2802 5.40139 10.5462 7.72294 8.22291C10.0445 5.89963 12.7785 4.05943 15.925 2.70232C19.0715 1.34521 22.4299 0.666656 26 0.666656C29.5702 0.666656 32.9285 1.34521 36.075 2.70232C39.2215 4.05943 41.9556 5.89963 44.2771 8.22291C46.5987 10.5462 48.4397 13.2802 49.8003 16.425C51.1608 19.5698 51.8385 22.9281 51.8334 26.5C51.8282 30.0719 51.1496 33.4302 49.7977 36.575C48.4458 39.7198 46.6056 42.4538 44.2771 44.7771C41.9487 47.1004 39.2146 48.9414 36.075 50.3002C32.9354 51.6591 29.5771 52.3368 26 52.3333Z" fill="black" />
                </svg>
            </a>
        </div>
    </div>
</nav>