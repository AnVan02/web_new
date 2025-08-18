<?php
// Danh sách đại lý theo từng tỉnh và quận
$agencyList = [
    'Hồ Chí Minh' => [
        'Quận 1' => [
            ['CÔNG TY TNHH TMDV TIN HỌC LONG BÌNH','50 Đ. Nguyễn Cư Trinh, Phường Phạm Ngũ Lão, Quận 1, Hồ Chí Minh','02838360699','https://longbinh.com.vn','https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15678.431806997538!2d106.691394!3d10.7646678!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f16f0873035%3A0x48f2fb97db388cad!2sLong%20Binh%20Computer%20-%20XP-Pen%20Graphic%20Tablet!5e0!3m2!1sen!2sca!4v1732835310116!5m2!1sen!2sca']
        ],
        
        'Quận Tân Bình' => [
            ['CÔNG TY TNHH Thương Mại Dịch Vụ Hợp Thành Thịnh','406/55 Đ. Cộng Hòa, Phường 13, Tân Bình, Hồ Chí Minh','02838464855 / 0983643653','https://hopthanhthinh.com/','https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d244.9438673296094!2d106.6435675!3d10.8035088!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f23ef04a651%3A0x349cb25b2db90d32!2zQ8OUTkcgVFkgVE5ISCBUSMavxqBORyBN4bqgSSBE4buKQ0ggVuG7pCBI4buiUCBUSMOATkggVEjhu4pOSA!5e0!3m2!1sen!2sca!4v1733169992215!5m2!1sen!2sca']
        ],
        
        ' Quận 5' => [
            ['CÔNG TY TNHH CÔNG NGHỆ MENSA','285/13 Trần Bình Trọng, Phường 4, Quận 5, Hồ Chí Minh','0915117005','https://mensa.com.vn/','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6532244423806!2d106.6763771750417!3d10.761186389386703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fdad874f013%3A0xbe14733c51999b48!2zQ8O0bmcgdHkgY8O0bmcgbmdo4buHIE1FTlNB!5e0!3m2!1sen!2sca!4v1733170565728!5m2!1sen!2sca']
        ]
    ],
    'Bình Dương' => [
        'Dĩ An' => [
            ['CÔNG TY TNHH MTV THẾ GIỚI MÁY TÍNH BẢNG','233 Đ. Lý Thường Kiệt, Dĩ An, Bình Dương','0888627262','https://tabletplaza.vn/','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7835.467135006968!2d106.75895779999999!3d10.9078417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d9f3d5b5db13%3A0x95aa8395d57098d9!2zVGFibGV0IFBsYXphIETEqSBBbiAtIDIzMyBMw70gVGjGsOG7nW5nIEtp4buHdA!5e0!3m2!1sen!2sca!4v1732832731084!5m2!1sen!2sca']
        ],
        
        'Phường Phú Cường' => [
            ['CÔNG TY TNHH MTV THẾ GIỚI MÁY TÍNH BẢNG','449 Đại lộ Bình Dương, Phú Cường, Thủ Dầu Một, Bình Dương','0834290290','https://tabletplaza.vn/','https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d979.1935651765904!2d106.6665375!3d10.9804043!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d17b83b9e9c1%3A0x311ee3876b3b1c06!2zVGFibGV0IFBsYXphIFRo4bunIEThuqd1IE3hu5l0!5e0!3m2!1sen!2sca!4v1732834289738!5m2!1sen!2sca']
        ],
        
        'Thị xã Bến Cát' => [
            ['CÔNG TY TNHH MTV THẾ GIỚI MÁY TÍNH BẢNG','Lô A10 Golden City, QL13, Khu phố 3, Bến Cát, Bình Dương','0888066578','https://tabletplaza.vn/','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3914.586112824163!2d106.6017617!3d11.144171000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174cbcb1d92e4e7%3A0xb4724f148736c9e9!2zVGFibGV0IFBsYXphIELhur9uIEPDoXQ!5e0!3m2!1sen!2sca!4v1732831765788!5m2!1sen!2sca']
        ]
    ],
    
    'Bình Định' => [
        'Phường Trần Phú' => [
            ['CÔNG TY TNHH VI TÍNH QUY NHƠN','149 Lê Hồng Phong, Trần Phú, Quy Nhơn, Bình Định','0903507433','https://quynhoncomputer.com.vn/','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.1023787433073!2d109.22540517514831!3d13.772699186621368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316f6c858aed50c3%3A0xbd5d4261eb42f502!2sVi%20Tinh%20Quy%20Nhon%20Co.%2CLtd!5e0!3m2!1sen!2sca!4v1732829681331!5m2!1sen!2sca']
        ]
    ],
    
    'Bạc Liêu' => [
        'Phường 3' => [
            ['CÔNG TY TNHH Tin Học Âu Trung','Số 174 - Đường Hòa Bình - Phường 3 - TP Bạc Liêu - tỉnh Bạc Liêu','02913918918','https://www.facebook.com/autrungbaclieu','https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15749.999146676137!2d105.7244244!3d9.2889061!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a1097ac3e74a5b%3A0xebe150cd85d8788b!2sCty%20TNHH%20Tin%20H%E1%BB%8Dc%20%C3%82u%20Trung!5e0!3m2!1sen!2sca!4v1732828860184!5m2!1sen!2sca']
        ]
    ],
    
    'Bình Thuận' => [
        'Phường Phú Thuỷ' => [
            ['CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ T&P','L5.48 Võ Văn Kiệt, Phường Phú Thủy, Thành phố Phan Thiết, Tỉnh Bình Thuận','0913675787','','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3917.303069047452!2d108.10708447504413!3d10.940463689218412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31768310d0528c35%3A0xc56d486ca2d79331!2zNDggVsO1IFbEg24gS2nhu4d0LCBQaMO6IFRodeG7tywgVGjDoG5oIHBo4buRIFBoYW4gVGhp4bq_dCwgQsOsbmggVGh14bqtbiwgVmlldG5hbQ!5e0!3m2!1sen!2sca!4v1733168437304!5m2!1sen!2sca']
        ]
    ],


    'Cần Thơ' => [
        'Ninh Kiều' => [
            ['CÔNG TY CỔ PHẦN ĐẦU TƯ VÀ CÔNG NGHỆ NGUYỄN VŨ','60-62 Lê bình, Q. Ninh Kiều, TP. Cần Thơ','1900571269','https://www.nguyenvu.store','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7857.802991319314!2d105.76498897508993!3d10.024987090081693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0895db247e369%3A0x52c682645aa5b138!2zTmd1eeG7hW4gVsWpIFN0b3Jl!5e0!3m2!1sen!2sca!4v1733169701247!5m2!1sen!2sca']
        ]
    ],
    
    'Đắk Lắk' => [
        'Phường Thắng Lợi' => [
            ['CÔNG TY TNHH TIN HỌC ÁNH DƯƠNG','20 Quang Trung, Thắng Lợi, Buôn Ma Thuột, Đắk Lắk','02623843411','http://anhduong-info.com.vn/','https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15569.965853795069!2d108.0438135!3d12.6813134!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31721d851c1c7931%3A0xeb0cf7d11e9408f4!2zQ8O0bmcgVHkgVG5oaCBUaW4gSOG7jWMgw4FuaCBExrDGoW5n!5e0!3m2!1sen!2sca!4v1732830053344!5m2!1sen!2sca']
        ]
    ],
    

    'Đà Nẵng' => [
        'Thanh Khê' => [
            ['CÔNG TY TNHH TIN HỌC MEGA','130 Hàm Nghi, Thạc Gián, Thanh Khê, Đà Nẵng','02363689300','https://mega.com.vn/','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7668.168295580429!2d108.20823207519281!3d16.06112258461727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219b419a87a59%3A0x3165407831b46a5c!2sMEGA%20Computer%20Co.!5e0!3m2!1sen!2sca!4v1732830400852!5m2!1sen!2sca']
        ]
    ],

    'Huế' => [
        'Phường An Cựu' => [
            ['CÔNG TY TNHH TM và Dịch Vụ Tấn Lập','98 An Dương Vương, An Đông, Huế, Thừa Thiên Huế','0905987920 / 0905013118','https://www.facebook.com/30tonthatduongky','https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3826.4794662115723!2d107.6011276!3d16.4512423!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a16952a3ec9f%3A0x10547e4fda8bf97c!2zOTggQW4gRMawxqFuZyBWxrDGoW5nLCBBbiDEkMO0bmcsIEh14bq_LCBUaOG7q2EgVGhpw6puIEh14bq_LCBWaWV0bmFt!5e0!3m2!1sen!2sca!4v1732832036718!5m2!1sen!2sca']
        ]
    ],

    'Hải Phòng' => [
        'Phường Đông Khê' => [
            ['CÔNG TY Cổ Phần Vận Tải và Thương Mại CPN Việt Nam','7 Đ. Lê Hồng Phong, Đông Khê, Ngô Quyền, Hải Phòng','0703522522','https://cpn.vn/','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3728.3594764158665!2d106.69919929999999!3d20.857556199999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219ccd55721c7%3A0x8a733a3eeef9bff5!2sCPN%20Electronics%20Store!5e0!3m2!1sen!2sca!4v1733170373627!5m2!1sen!2sca']
        ]
    ],

    'Kontum' => [
        'Phường Quyết Thắng' => [
            ['CÔNG TY TNHH MTV ĐIỆN MÁY DUYÊN','307 Trần Hưng Đạo, Phường Quyết Thắng, Kon Tum','02603862006','https://www.facebook.com/dienmayduyenkontum/','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3865.339126071887!2d108.00160837510133!3d14.349775486107376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316bff9f7d866a1d%3A0x98306d294b60ab81!2zU2nDqnUgVGjhu4sgxJBp4buHbiBNw6F5IER1ecOqbg!5e0!3m2!1sen!2sca!4v1732830717752!5m2!1sen!2sca']
        ]
    ],
    'Kiên Giang' => [
        'Phường An Hòa' => [
            ['CÔNG TY TNHH Siêu thị  Nguyễn Đăng','635 Nguyễn Trung Trực, P. An Hoà, Rạch Giá, Kiên Giang','02973816281','http://sieuthinguyendang.com/','https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d245.58845500008255!2d105.1031368!3d9.9825135!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0b414ba69ae2d%3A0x3b38de549178b493!2sSupermarket%20Nguyen%20Dang!5e0!3m2!1sen!2sca!4v1733169178699!5m2!1sen!2sca']
        ]
    ],

    'Long An' => [
        'Huyện Bến Lức' => [
            ['CÔNG TY TNHH Thương Mại Kỹ Thuật Thái Hòa','65 Khu 1, ấp chợ, Bến Lức, Long An','0946808239','https://thdigital.vn/','https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d490.15339507839553!2d106.5342991!3d10.6394529!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310acd7cca6508a3%3A0xef796aa238c83794!2sTH%20Digital!5e0!3m2!1sen!2sca!4v1732831529496!5m2!1sen!2sca']
        ]
    ],

    'Long Xuyên' => [
        'Phường Mỹ Long' => [
            ['CÔNG TY CP CẢNH TOÀN','40 Đ. Hùng Vương, Mỹ Long, Thành phố Long Xuyên, An Giang','02963847222 / 0939638579','https://canhtoan.com/','https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7849.064006850877!2d105.4416221!3d10.3792541!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310a72e335313a35%3A0xdf301543d90e0a85!2zQ-G6o25oIFRvw6Bu!5e0!3m2!1sen!2sca!4v1732832970588!5m2!1sen!2sca']
        ]
    ],
    
    
    'Khánh Hoà' => [
        'Phường Phương Sài' => [
            ['CÔNG TY TNHH Tin Học TH Nha Trang','216-218 Thống Nhất, Phương Sài, Nha Trang, Khánh Hòa','0989159499','https://thnhatrang.vn/','https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15595.85696887023!2d109.1852639!3d12.2506991!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31705d7e592a37cb%3A0xb8bd051273fa6e2b!2sTH%20Nha%20Trang%20Company%20Limited%20-%20Nha%20Trang%20XP-Pen%20Drawing%20Tablet!5e0!3m2!1sen!2sca!4v1732829316248!5m2!1sen!2sca']
        ]
    ],
    
    
    'Quảng Ngãi' => [
        'Phường Chánh Lộ' => [
            ['CÔNG TY TNHH TIN HỌC VÀ CHUYỂN GIAO CÔNG NGHỆ CIVIP','750 Đ. Quang Trung, Chánh Lộ, Quảng Ngãi','02553729729','https://www.civip.com.vn/','https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15407.191695191883!2d108.807787!3d15.1144619!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3169ad2b32186ed1%3A0xa5b47cbfe4eedebc!2zQ8O0bmcgVHkgVG5oaCBUaW4gSOG7jWMgVsOgIENodXnhu4NuIEdpYW8gQ8O0bmcgTmdo4buHIENpdmlw!5e0!3m2!1sen!2sca!4v1732830993346!5m2!1sen!2sca']
        ]
    ],
    
    'Quảng Bình' => [
        'Phường Đồng Hải' => [
            ['CÔNG TY TNHH Điện Tử Tin Học HTC','72 Lê Lợi, Đồng Hải, Đồng Hới, Quảng Bình','0983578924','http://htcquangbinh.com.vn/','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3805.992079771707!2d106.61969527516659!3d17.46009318343953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314756c94cf2957f%3A0x6b5f228702aa49bc!2sEmail%20HTC%20Quang%20Binh!5e0!3m2!1sen!2sca!4v1732835101297!5m2!1sen!2sca']
        ]
    ],
    
    'Sóc Trăng' => [
        'Phường 1' => [
            ['CÔNG TY TNHH Vi Tính Tuấn Huy','49 Xô Viết Nghệ Tĩnh, Phường 1, Sóc Trăng','0915606206','https://vitinhtuanhuy.com/','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3933.89219979562!2d105.96968367502609!3d9.604550090481576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a04df8570eb72b%3A0x715a101ef6090391!2zQ8O0bmcgVHkgVE5ISCBUdeG6pW4gSHV5!5e0!3m2!1sen!2sca!4v1732832229591!5m2!1sen!2sca']
        ]
    ],
    
    'Vĩnh Long' => [
        'Phường 4' => [
            ['CÔNG TY TNHH Một Thành Viên Máy Tính Hưng Thịnh','56/4a Phạm Thái Bường, Phường 4, Vĩnh Long','0782879868','https://www.facebook.com/HungThinhVLg','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3926.1924240761346!2d105.97685750000001!3d10.246059299999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310a9d892490110d%3A0xcc9f7f22d18cb7e8!2zVHJ1bmcgVMOibSBNw6F5IFTDrW5oIEjGsG5nIFRo4buLbmg!5e0!3m2!1sen!2sca!4v1732832415903!5m2!1sen!2sca']
        ]
    ],
    
    'Ninh Thuận' => [
        'Phường Kinh Dinh' => [
            ['CÔNG TY Điện Tử-Tin Học Từ Sơn','487 Thống Nhất, Kinh Dinh, Phan Rang-Tháp Chàm, Ninh Thuận','0913930220','https://tuson.vn/','https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15635.247483869643!2d108.9908476!3d11.5653404!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3170d02c8981a191%3A0x54e182842fbc4bbe!2zQ8O0bmcgVHkgVE5ISCDEkGnhu4duIFThu60gLSBUaW4gSOG7jWMgVOG7qyBTxqFu!5e0!3m2!1sen!2sca!4v1732833504270!5m2!1sen!2sca']
        ]
    ],
    
    'Quảng Nam' => [
        'Phường An Sơn' => [
            ['CÔNG TY TNHH CÔNG NGHỆ TIN HỌC VIỄN THÔNG QUỐC THẮNG','469 Hùng Vương, Phường An Sơn, Tam Kỳ, Quảng Nam','02353828800','https://quocthangplaza.com/','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3843.6544149091783!2d108.49333589999999!3d15.556646100000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3169dcc60c93ee03%3A0x41296e67bc01c642!2zNDY5IEjDuW5nIFbGsMahbmcsIFBoxrDhu51uZyBBbiBTxqFuLCBUYW0gS-G7sywgUXXhuqNuZyBOYW0sIFZp4buHdCBOYW0!5e0!3m2!1svi!2sca!4v1732834099965!5m2!1svi!2sca']
        ]
    ],
    
    'Trà Vinh' => [
        'Huyện Châu Thành' => [
            ['CÔNG TY TNHH MỘT THÀNH VIÊN ĐÌNH THUẬT','ố 45, Ấp Tân Ngại, Xã Lương Hoà A, Huyện Châu Thành, Tỉnh Trà Vinh','0367253849','','']
        ]
    ],
    
     'Tiền Giang' => [
        'Phường 5' => [
            ['CÔNG TY TNHH Sao Nam Tiền Giang','118 Lý Thường Kiệt, Phường 5, Mỹ Tho, Tiền Giang','02733970444','https://saonamtg.com','https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d490.59689117326246!2d106.353866!3d10.359857!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310aaff0e3196f15%3A0xdf231f46dac9d733!2sC%C3%B4ng%20Ty%20Tnhh%20Sao%20Nam%20TG!5e0!3m2!1svi!2sus!4v1732833260679!5m2!1svi!2sus']
        ]
    ],

    'Nghệ An' => [
        'Phường Trung Đô' => [
            ['Công ty TNHH Đầu tư và Phát triển CNTT Hoàng Lân','Số 215 Lê Duẩn, P.Trung Đô, TP Vinh, Nghệ An','02383558189 - 0989552709','http://hoanglanvinh.vn/','']
        ]
        ],
    
    
    'Vũng Tàu' => [
        'Phường Thắng Tam' => [
            ['CÔNG TY TNHH Dương Nhật Tiến','110 Nam Kỳ Khởi Nghĩa, Phường Thắng Tam, Vũng Tàu, Bà Rịa-Vũng Tàu','0827595856','http://dntvungtau.com/','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3924.9396724654853!2d107.08454499999999!3d10.346708999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31756fee6f4777e5%3A0xf636f5fe599cf0b7!2sCompany%20Limited%20Nhat%20Tien%20Duong!5e0!3m2!1sen!2sca!4v1732834908656!5m2!1sen!2sca']
        ]
    ]
    
];
?>