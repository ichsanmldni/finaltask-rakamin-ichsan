<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/frontend/assets/css/stylesheet.css">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <title>RHD IT Consultant</title>
    </head>
    <body>
        <div class="container-navBar rounded-xl shadow backdrop-blur-lg w-full fixed top-0 text-[#4460EF]">
            <nav class="navigationBar">
                <ul class="navList ml-12">
                    <li class="navList-item text-[20px] font-[700] px-[16px] py-[12px] mx-[32px] my-[20px] mr-40 inline-block"><a class="navBar-namaCompany" href="index"><p class="drop-shadow">RHD IT SOLUTION</p></a></li>
                    <li class="navList-item text-[20px] font-[400] px-[16px] py-[12px] mx-[32px] my-[20px] inline-block"><a href="index"><p class="drop-shadow">Home</p></a></li>
                    <li class="navList-item text-[20px] font-[400] px-[16px] py-[12px] mx-[32px] my-[20px] inline-block"><a href="service"><p class="drop-shadow">Services</p></a></li>
                    <li class="navList-item text-[20px] font-[400] px-[16px] py-[12px] mx-[32px] my-[20px] inline-block"><a href="portfolio"><p class="drop-shadow">Portfolio</p></a></li>
                    <li class="navList-item text-[20px] font-[400] px-[16px] py-[12px] mx-[32px] my-[20px] inline-block"><a href="contact"><p class="drop-shadow">Contact</p></a></li>
                    <li class="navList-item text-[20px] font-[400] px-[16px] py-[12px] mx-[32px] my-[20px] item-dropDown inline-block"><a href="about"><p class="drop-shadow">About</p></a>
                        <ul class="dropDown-list hidden">
                            <li><a href="dropDownList-item">About Us</a></li>
                            <li><a href="dropDownList-item">Team</a></li>
                            <li><a href="dropDownList-item">Testimonials</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="container-mapsAndUpdates text-[#4460EF] bg-[url('/frontend/assets/img/background4.png')] bg-cover mb-[740px] w-full h-[1285px]">
            <div class="container-mapsAndOurLCS">
                <div class="container-mapsframe pt-[96px]">
                    <iframe height="700px" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3966.6378104398104!2d106.90544824548172!3d-6.17921142128576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1668284671177!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="container-ourLocationContactSocialMedia flex justify-center gap-[48px]">
                    <div class="container-urLocation basis-1/3 pl-[96px] py-[56px]">
                        <h4 class="text-[44px] font-[600]">Location</h4>
                        <p class="text-[24px] font-[400]">4517 Washington Ave. Manchester, Kentucky 39495</p>
                    </div>
                    <div class="container-ourContact text-white basis-1/3 px-[48px] py-[56px]">
                        <h4 class="text-[44px] font-[600]">Contact Us</h4>
                        <div>
                            <img src="" alt="">
                            <p class="text-[24px] font-[400]">085810676264</p>
                        </div>
                        <div>
                            <img src="" alt="">
                            <p class="text-[24px] font-[400]">rhdaityconsultant7@gmail.com</p>
                        </div>
                    </div>
                    <div class="container-ourSocialMedia text-white basis-1/3 pr-[96px] py-[56px]">
                        <h1 class="text-[44px] font-[600]">Social Media</h1>
                        <div class="container-imgCompanySocialMedia mt-[12px]">
                            <a class="inline-block mr-[8px]" href=""><img src="/frontend/assets/img/instagram.png" alt=""></a>
                            <a class="inline-block mx-[8px]" href=""><img src="/frontend/assets/img/github.png" alt=""></a>
                            <a class="inline-block mx-[8px]" href=""><img src="/frontend/assets/img/telegram.png" alt=""></a>
                            <a class="inline-block ml-[8px]" href=""><img src="/frontend/assets/img/whatsapp.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-updates p-[96px]">
                <div class="container-titDescUpdates">
                    <h1 class="text-[74px] font-[600]">Join Updates</h1>
                    <p class="text-[24px] font-[400] text-[#9B9B9B]">Keep in Touch With Us</p>
                </div>
                <div class="flex gap-[96px] pt-[60px]">
                    <div class="columns-2">
                        <img class="mb-[16px]" src="/frontend/assets/img/updates1.png" alt="">
                        <img class="mb-[16px]" src="/frontend/assets/img/updates2.png" alt="">
                        <img class="mb-[16px]" src="/frontend/assets/img/updates3.png" alt="">
                        <img class="mb-[16px]" src="/frontend/assets/img/updates4.png" alt="">
                    </div>
                    <div>
                        <form action="">
                            <div class="grid grid-cols-2 gap-[8px]">
                                <div class="w-[285px] h-[64px]">
                                    <input type="" class="inputName text-[24px] text-black p-[8px] rounded-md w-full h-full border-2 border-[#4460EF] focus:border-[#4460EF] placeholder:text-[24px] placeholder:italic" placeholder="Your Name">
                                </div>
                                <div>
                                    <input type="" class="p-[8px] rounded-md w-full h-full border-2 border-[#4460EF] placeholder:text-[24px] placeholder:italic" placeholder="your@gmail.com">
                                </div>
                            </div>
                            <div class="w-[579px] h-[64px] mt-[20px]">
                                <input type="" class="p-[8px] rounded-md w-full h-full border-2 border-[#4460EF] placeholder:text-[24px] placeholder:italic" placeholder="Subject">
                            </div>
                            <div class="w-[579px] h-[312px] mt-[20px]">
                                <textarea class="p-[8px] rounded-md w-full h-full border-2 border-[#4460EF] placeholder:text-[24px] placeholder:italic" placeholder="Message" name="" id="" cols="30" rows="10"></textarea>
                            </div>
                            <div class="float-right mt-[44px]">
                                <input class="bg-[#4460EF] text-[24px] text-white rounded-lg w-[248px] h-[64px]" type="submit" name="" id="">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-[url(/frontend/assets/img/background2.png)] bg-cover w-full h-[624px]">
            <div class="container-footer text-[#F5F5F5] pt-[140px] w-full flex">
                <div class="container-companyContact mt-[180px] m-auto">
                    <div class="container-titCompanyContact">
                        <h1 class="text-[36px] font-[500]">Company</h1>
                    </div>
                    <div class="container-descCompanyContact mt-[8px]">
                        <p class="font-[400px]">Aowkaowkaokwoakowkoak</p>
                    </div>
                    <div class="container-listCompanyContact mt-[50px]">
                        <p>Phone : 0853-1100-0921</p>
                        <p>Mail  : yusufaa464@gmail.com</p>
                    </div>
                </div>
                <div class="container-companyService mt-[180px] m-auto">
                    <div class="container-titCompanyService">
                        <h1 class="text-[36px] font-[500]">Our Service</h1>
                    </div>
                    <div class="container-listCompanyService mt-[8px]">
                        <ul>
                            <li>> Web Development</li>
                            <li>> Iot</li>
                            <li>> Design</li>
                            <li>> Ilustrator</li>
                            <li>> Photography</li>
                        </ul>
                    </div>
                </div>
                <div class="container-companyLegalAndSupport mt-[180px] m-auto">
                    <div class="container-companyLegal">
                        <div class="container-titCompanyLegal">
                            <h1 class="text-[36px] font-[500]">Legal</h1>
                        </div>
                        <div class="container-listCompanyLegal mt-[8px]">
                            <ul>
                                <li>> Terms & Condition</li>
                                <li>> License Agreement</li>
                            </ul>
                        </div>
                    </div>
                    <div class="container-companySupport mt-[12px]">
                        <div class="container-titCompanySupport">
                            <h1 class="text-[36px] font-[500]">Support</h1>
                        </div>
                        <div class="container-listCompanyLegal mt-[8px]">
                            <ul>
                                <li>> FAQ</li>
                                <li>> CONTACT</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container-companySocialMediaAndSubscription text-[36px] font-[500] mt-[28px] mx-[80px] m-auto">
                    <div class="container-companySocialMedia">
                        <div class="container-titCompanySocialMedia">
                            <h1 class="">Social Media</h1>
                        </div>
                        <div class="container-imgCompanySocialMedia mt-[12px]">
                            <a class="inline-block mr-[8px]" href=""><img src="/frontend/assets/img/instagram.png" alt=""></a>
                            <a class="inline-block mx-[8px]" href=""><img src="/frontend/assets/img/github.png" alt=""></a>
                            <a class="inline-block mx-[8px]" href=""><img src="/frontend/assets/img/telegram.png" alt=""></a>
                            <a class="inline-block ml-[8px]" href=""><img src="/frontend/assets/img/whatsapp.png" alt=""></a>
                        </div>
                    </div>
                    <div class="container-companySubscription mt-[12px]">
                        <div class="container-titCompanySubscription">
                            <h1 class="text-[36px] font-[500]">Subscription</h1>
                        </div>
                        <div class="container-descCompanySubscription">
                            <p class="text-[18px] font-[400]">Aowkaowkaokwoakowkoak</p>
                        </div>
                        <div class="container-inputMailCompanySubscription flex mt-[80px] w-[280px] h-[36px]">
                            <input class="text-[13px] px-[24px] text-[#000000] w-[180px] h-[36px] rounded-tl-lg rounded-bl-lg placeholder:text-[13px] placeholder:text-[#9B9B9B]" type="text" placeholder="your@gmail.com">
                            <div class="bg-white rounded-tr-lg rounded-br-lg w-[100px] h-[36px] py-[8px]">
                                <a href="" class="text-center text-[#4460EF] text-[13px]"><p class="">Submit</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://kit.fontawesome.com/55c5f1fd25.js" crossorigin="anonymous"></script>
        <script src="frontend/assets/js/masonry.js"></script>
    </body>
</html>