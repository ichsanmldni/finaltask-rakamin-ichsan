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
        <div class="container-carouselAndServices text-[#4460EF] bg-[url('/frontend/assets/img/background1.png')] bg-cover mb-[640px] w-full h-[986px]">
            <div class="carousel-inner pt-[132px]">
                <div class="container-carouselItem">
                    <div class="block flex flex-row mx-[36px] mb-[12px]">
                        <div class="carousel-item1 inline-block mx-[56px] my-[12px] flex">
                            <div class="inline-block w-[580px]">
                                <h1 class="text-[28px] font-[600]">Selamat Datang!</h1>
                                <h1 class="text-[56px] font-[600]">Temukan Freelancer Impianmu Disini</h1>
                                <p class="text-[22px] font-[400]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus reiciendis amet numquam  consequuntur?</p>
                                <div class="mt-[36px]">
                                    <button class="font-[600] bg-[#4662EF] text-[#FFFFFF] text-[20px] rounded-[16px] px-24 py-4"><a href="contact">Pesan</a></button>
                                    <button class="font-[600] outline outline-[4px] text-[#4662EF] ml-[40px] outline-[#4662EF] text-[20px] rounded-[16px] px-[56px] py-[12px]"><a href="contact">Hubungi Kami</a></button>
                                </div>
                            </div>
                            <div class="inline-block ml-[40px] w-[450px]">
                                <img class="carousel-img1" src="/frontend/assets/img/vectorCarousel1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="block">
                        <div class="p-[30px] text-center">
                            <button><img src="./frontend/assets/img/activeIndicator.png" alt=""></button>
                            <button><img src="./frontend/assets/img/unactiveIndicator.png" alt=""></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-services w-full mt-[280px]">
                <div class="container-titdescServices">
                    <div class="container-titleServices text-[#4460EF] text-[74px] font-[600]">
                        <h2 class="mx-[96px]">Our Services</h2>
                    </div>
                    <div class="container-descServices text-[#9B9B9B] text-[24px] font-[400]">
                    <p class="mx-[96px]">Bukan kaleng-kaleng banh, aseli</p>
                    </div>
                </div>
                <div class="container-cardServices text-[#FFFFFF] mx-[100px] flex justify-center gap-[48px] flex-row h-[460px] mt-[60px]">
                    <div class="container-cardServicesItem basis-1/3 bg-cover bg-center bg-[url('frontend/assets/img/webDevServices.jpg')] rounded-[12px]">
                        <div class="container-backGTitDescServicesItem 2xl:h-[305px] w-full h-[275px] rounded-[12px] 2xl:mt-[160px] mt-[185px]">
                            <div class="container-titDescServicesItem mx-[28px] 2xl:pt-[180px] xl:pt-[120px]">
                                <h5 class="text-[28px] font-[500]">Web Development</h5>
                                <p>Hengker</p>
                            </div>
                        </div>
                    </div>
                    <div class="container-cardServicesItem basis-1/3 bg-cover bg-center bg-[url('frontend/assets/img/photograppServices.jpg')] rounded-[12px]">
                        <div class="container-backGTitDescServicesItem 2xl:h-[305px] w-full h-[275px] rounded-[12px] 2xl:mt-[160px] mt-[185px]">
                            <div class="container-titDescServicesItem mx-[28px] 2xl:pt-[180px] xl:pt-[120px]">
                                <h5 class="text-[28px] font-[500]">Photograpp</h5>
                                <p>Cekrek</p>
                            </div>
                        </div>
                    </div>
                    <div class="container-cardServicesItem basis-1/3 bg-cover bg-center bg-[url('frontend/assets/img/designServices.jpg')] rounded-[12px]">
                        <div class="container-backGTitDescServicesItem 2xl:h-[305px] w-full h-[275px] rounded-[12px] 2xl:mt-[160px] mt-[185px]">
                            <div class="container-titDescServicesItem mx-[28px] 2xl:pt-[180px] xl:pt-[120px]">
                                <h5 class="text-[28px] font-[500]">Design</h5>
                                <p>Perfection</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-pembatas w-full my-[20px]">
            <img class="w-full" src="/frontend/assets/img/pembatas1.png" alt="">
        </div>
        <div class="container-portfolio min-[1700px]:top-[1900px] min-[2300px]:top-[2000px] w-full text-[#4460EF]">
            <div class="container-titPortfolio mx-[96px] mt-[96px]">
                <h1 class="text-[74px] font-[600]">Portfolio</h1>
            </div>
            <div class="container-listPortfolio">
                <div class="container-subListTitPortfolio flex justify-center mt-[40px]">
                    <ul class="flex text-[36px] gap-[85px]">
                        <li>All</li>
                        <li>Web Development</li>
                        <li>Photograpp</li>
                        <li>Design</li>
                    </ul>
                </div>
                <div class="container-subListImagePortfolio px-[70px]">
                    <div class="container-masonry w-full mt-[70px]">
                        
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
        <script src="/frontend/assets/js/masonry.js"></script>
    </body>
</html>