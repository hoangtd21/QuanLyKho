var cities = {
  "An Giang": [
    "Thành phố Long Xuyên",
    "Thành phố Châu Đốc",
    "Huyện An Phú",
    "Thị xã Tân Châu",
    "Huyện Phú Tân",
    "Huyện Châu Phú",
    "Huyện Tịnh Biên",
    "Huyện Tri Tôn",
    "Huyện Châu Thành",
    "Huyện Chợ Mới",
    "Huyện Thoại Sơn",
  ],
  "Bà Rịa – Vũng Tàu": [
    "Thành phố Bà Rịa	",
    "Thành phố Vũng Tàu",
    "Thị xã Phú Mỹ ",
    "Huyện Châu Đức",
    "Huyện Côn Đảo",
    "Huyện Đất Đỏ",
    "Huyện Long Điền",
    "Huyện Xuyên Mộc",
  ],
  "Bắc Giang": [
    "Huyện Lục Ngạn",
    "Huyện Lục Nam",
    "Huyện Yên Thế",
    "Huyện Lạng Giang",
    "Huyện Yên Dũng",
    "Huyện Tân Yên",
    "Huyện Sơn Động",
    "Huyện Hiệp Hòa",
    "Huyện Việt Yên",
  ],
  "Bắc Kạn": [
    "Thành Phố Bắc Kạn",
    "Huyện Pác Nặm",
    "Huyện Ba Bể",
    "Huyện Ngân Sơn",
    "Huyện Bạch Thông",
    "Huyện Chợ Đồn",
    "Huyện Chợ Mới",
    "Huyện Na Rì",
  ],
  "Bạc Liêu": [
    "Thành phố Bạc Liêu",
    " Huyện Hồng Dân",
    "Huyện Phước Long",
    " Huyện Vĩnh Lợi",
    " Thị xã Giá Rai",
    "  Huyện Đông Hải",
    "Huyện Hoà Bình",
  ],
  "Bắc Ninh": [
    "Thành phố Bắc Ninh",
    "Huyện Yên Phong",
    "Huyện Quế Võ",
    "Huyện Tiên Du",
    "Thị xã Từ Sơn",
    "Huyện Thuận Thành",
    "Huyện Gia Bình",
    "Huyện Lương Tài",
  ],
  "Bến Tre": [
    "Thành phố Bến Tre",
    "Huyện Châu Thành",
    " Huyện Chợ Lách",
    "Huyện Mỏ Cày Nam",
    " Huyện Giồng Trôm",
    " Huyện Bình Đại",
    "Huyện Ba Tri",
    "Huyện Thạnh Phú",
    "Huyện Mỏ Cày Bắc",
  ],
  "Bình Định": [
    "Thành phố Qui Nhơn",
    "Huyện An Lão",
    "Huyện Hoài Nhơn",
    "Huyện Hoài Ân",
    "  Huyện Phù Mỹ",
    "Huyện Vĩnh Thạnh",
    "  Huyện Tây Sơn",
    "Huyện Phù Cát",
    "Thị xã An Nhơn",
    "  Huyện Tuy Phước",
    " Huyện Vân Canh",
  ],
  "Bình Dương": [
    "Thành phố Thủ Dầu Một",
    "Huyện Bàu Bàng",
    "Huyện Dầu Tiếng",
    "Thị xã Bến Cát",
    "Huyện Phú Giáo",
    "Thị xã Tân Uyên",
    "Thị xã Dĩ An",
    " Thị xã Thuận An",
    "Huyện Bắc Tân Uyên",
  ],
  "Bình Phước": [
    "Thị xã Phước Long",
    "Thị xã Đồng Xoài",
    "Thị xã Bình Long",
    " Huyện Bù Gia Mập",
    "Huyện Lộc Ninh",
    " Huyện Bù Đốp",
    "Huyện Hớn Quản",
    "Huyện Đồng Phú",
    "Huyện Bù Đăng",
    " Huyện Chơn Thành",
    "Huyện Phú Riềng",
  ],
  "Bình Thuận": [
    "Thành phố Phan Thiết",
    " Thị xã La Gi",
    "Huyện Tuy Phong",
    "Huyện Bắc Bình",
    " Huyện Hàm Thuận Bắc",
    " Huyện Hàm Thuận Nam",
    "Huyện Tánh Linh",
    "Huyện Đức Linh",
    "Huyện Hàm Tân",
    "Huyện Phú Quí",
  ],
  "Cà Mau": [
    "Thành phố Cà Mau",
    "Huyện U Minh",
    " Huyện Thới Bình",
    "Huyện Trần Văn Thời",
    "Huyện Cái Nước",
    "Huyện Đầm Dơi",
    "Huyện Năm Căn",
    "Huyện Phú Tân",
    " Huyện Ngọc Hiển",
  ],
  "Cần Thơ": [
    "Quận Ninh Kiều",
    "Quận Ô Môn",
    "Quận Bình Thuỷ",
    " Quận Cái Răng",
    "  Quận Thốt Nốt",
    "Huyện Vĩnh Thạnh",
    "  Huyện Cờ Đỏ",
    "   Huyện Phong Điền",
    " Huyện Thới Lai",
  ],
  "Cao Bằng": [
    "Thành phố Cao Bằng",
    "Huyện Bảo Lâm",
    "Huyện Bảo Lạc",
    "Huyện Thông Nông",
    " Huyện Hà Quảng",
    "Huyện Trà Lĩnh",
    " Huyện Trùng Khánh",
    "Huyện Hạ Lang",
    "Huyện Quảng Uyên",
    "Huyện Phục Hoà",
    "Huyện Hoà An",
    "Huyện Nguyên Bình",
    "Huyện Thạch An",
  ],
  "Đà Nẵng": [
    "Quận Liên Chiểu",
    "Quận Thanh Khê",
    "Quận Hải Châu",
    "Quận Sơn Trà",
    "Quận Ngũ Hành Sơn",
    " Quận Cẩm Lệ",
    "Huyện Hòa Vang",
  ],
  "Đắk Lắk": [
    "Thành phố Buôn Ma Thuột",
    "Thị Xã Buôn Hồ",
    "Huyện Ea H'leo",
    "Huyện Ea Súp",
    " Huyện Buôn Đôn",
    "Huyện Cư M'gar",
    "Huyện Krông Búk",
    " Huyện Krông Năng",
    "Huyện Ea Kar",
    "Huyện M'Đrắk",
    "Huyện Krông Bông",
    " Huyện Krông Pắc",
    "Huyện Krông A Na",
    "Huyện Lắk",
    "Huyện Cư Kuin",
  ],
  "Đắk Nông": [
    "Thị xã Gia Nghĩa",
    " Huyện Đăk Glong",
    "Huyện Cư Jút",
    "Huyện Đắk Mil",
    "  Huyện Krông Nô",
    "Huyện Đắk Song",
    " Huyện Đắk R'Lấp",
    "Huyện Tuy Đức",
  ],
  "Điện Biên": [
    "Thành phố Điện Biên Phủ",
    "Thị Xã Mường Lay",
    "Huyện Mường Nhé",
    "Huyện Mường Chà",
    "Huyện Tủa Chùa",
    "Huyện Tuần Giáo",
    "Huyện Điện Biên",
    "Huyện Điện Biên Đông",
    "Huyện Mường Ảng",
    "Huyện Nậm Pồ",
  ],
  "Đồng Nai": [
    "Thành phố Biên Hòa",
    "Thị xã Long Khánh",
    "Huyện Tân Phú",
    "Huyện Vĩnh Cửu",
    "Huyện Định Quán",
    "Huyện Trảng Bom",
    "Huyện Thống Nhất",
    "Huyện Cẩm Mỹ",
    "Huyện Long Thành",
    "Huyện Xuân Lộc",
    "Huyện Nhơn Trạch",
  ],
  "Đồng Tháp": [
    "Thành phố Cao Lãnh",
    "Thành phố Sa Đéc",
    "Thị xã Hồng Ngự",
    "Huyện Tân Hồng",
    "Huyện Hồng Ngự",
    " Huyện Tam Nông",
    "Huyện Tháp Mười",
    " Huyện Cao Lãnh",
    "Huyện Thanh Bình",
    " Huyện Lấp Vò",
    "Huyện Lai Vung",
    "Huyện Châu Thành",
  ],
  "Gia Lai": [
    "Thành phố Pleiku",
    "Thị xã An Khê",
    "  Thị xã Ayun Pa",
    "Huyện KBang",
    " Huyện Đăk Đoa",
    " Huyện Chư Păh",
    " Huyện Ia Grai",
    "Huyện Mang Yang",
    "Huyện Kông Chro",
    "Huyện Đức Cơ",
    "Huyện Chư Prông",
    "Huyện Chư Sê",
    "Huyện Đăk Pơ",
    "Huyện Ia Pa",
    "Huyện Krông Pa",
    "Huyện Phú Thiện",
    "Huyện Chư Pưh",
  ],
  "Hà Giang": [
    "Thành phố Hà Giang",
    "   Huyện Đồng Văn",
    " Huyện Mèo Vạc",
    " Huyện Yên Minh",
    "Huyện Quản Bạ",
    "   Huyện Vị Xuyên",
    "  Huyện Bắc Mê",
    "  Huyện Hoàng Su Phì",
    "  Huyện Xín Mần",
    "  Huyện Bắc Quang",
    "   Huyện Quang Bình",
  ],
  "Hà Nam": [
    "Thành phố Phủ Lý",
    "Huyện Duy Tiên",
    " Huyện Kim Bảng",
    "Huyện Thanh Liêm",
    "Huyện Bình Lục",
    "Huyện Lý Nhân",
  ],
  "Hà Nội": [
    "Quận Ba Đình",
    "Quận Hoàn Kiếm",
    " Quận Tây Hồ",
    " Quận Long Biên",
    "Quận Cầu Giấy",
    "Quận Đống Đa",
    "Quận Hai Bà Trưng",
    "Quận Hoàng Mai",
    "Quận Thanh Xuân",
    "Huyện Sóc Sơn",
    "Huyện Đông Anh",
    "Huyện Gia Lâm",
    "Quận Nam Từ Liêm",
    "Huyện Thanh Trì",
    "Quận Bắc Từ Liêm",
    "Huyện Mê Linh",
    "Quận Hà Đông",
    "Thị xã Sơn Tây",
    "Huyện Ba Vì",
    " Huyện Phúc Thọ",
    " Huyện Đan Phượng",
    " Huyện Hoài Đức",
    "Huyện Quốc Oai",
    "Huyện Thạch Thất",
    "Huyện Chương Mỹ",
    " Huyện Thanh Oai",
    " Huyện Thường Tín",
    " Huyện Phú Xuyên",
    "Huyện Ứng Hòa",
    "Huyện Mỹ Đức",
  ],
  "Hà Tĩnh": [
    "Thành phố Hà Tĩnh",
    "Thị xã Hồng Lĩnh",
    "Huyện Hương Sơn",
    " Huyện Đức Thọ",
    "Huyện Vũ Quang",
    "Huyện Nghi Xuân",
    " Huyện Can Lộc",
    "  Huyện Hương Khê",
    "Huyện Thạch Hà",
    " Huyện Cẩm Xuyên",
    "Huyện Kỳ Anh",
    "Huyện Lộc Hà",
    "Thị xã Kỳ Anh",
  ],
  "Hải Dương": [
    "Thành phố Hải Dương",
    "Thị xã Chí Linh",
    "Huyện Nam Sách",
    " Huyện Kinh Môn",
    "Huyện Kim Thành",
    "Huyện Thanh Hà",
    "Huyện Cẩm Giàng",
    " Huyện Bình Giang",
    "Huyện Gia Lộc",
    "Huyện Tứ Kỳ",
    "Huyện Ninh Giang",
    "Huyện Thanh Miện",
  ],
  "Hải Phòng": [
    "Quận Hồng Bàng",
    "Quận Ngô Quyền",
    "Quận Lê Chân",
    "Quận Hải An",
    "Quận Kiến An",
    "Quận Đồ Sơn",
    "Quận Dương Kinh",
    "Huyện Thuỷ Nguyên",
    "Huyện An Dương",
    "Huyện An Lão",
    " Huyện Kiến Thuỵ",
    "Huyện Tiên Lãng",
    "Huyện Vĩnh Bảo",
    "Huyện Cát Hải",
  ],
  "Hậu Giang": [],
  "Hòa Bình": [
    "Thành phố Hòa Bình",
    "Huyện Đà Bắc",
    " Huyện Kỳ Sơn",
    "  Huyện Lương Sơn",
    "Huyện Kim Bôi",
    "Huyện Cao Phong",
    "Huyện Tân Lạc",
    "Huyện Mai Châu",
    "Huyện Lạc Sơn",
    " Huyện Yên Thủy",
    "Huyện Lạc Thủy",
  ],
  "Hưng Yên": [
    "Thành phố Hưng Yên",
    "  Huyện Văn Lâm",
    "Huyện Văn Giang",
    "Huyện Yên Mỹ",
    "Huyện Mỹ Hào",
    "Huyện Ân Thi",
    "Huyện Khoái Châu",
    "Huyện Kim Động",
    " Huyện Tiên Lữ",
    "Huyện Phù Cừ",
  ],
  "Khánh Hòa	": [],
  "Kiên Giang": [],
  "Kon Tum": [],
  "Lai Châu": [],
  "Lâm Đồng": [],
  "Lạng Sơn": [
    "Thành phố Lạng Sơn",
    "Huyện Tràng Định",
    "Huyện Bình Gia",
    "Huyện Văn Lãng",
    "Huyện Cao Lộc",
    " Huyện Văn Quan",
    "Huyện Bắc Sơn",
    "Huyện Hữu Lũng",
    "Huyện Chi Lăng",
    "Huyện Lộc Bình",
    "Huyện Đình Lập",
  ],
  "Lào Cai": [
    "Thành phố Lào Cai",
    "Huyện Bát Xát",
    " Huyện Mường Khương",
    "Huyện Si Ma Cai",
    "Huyện Bắc Hà",
    "Huyện Bảo Thắng",
    "Huyện Bảo Yên",
    "Huyện Sa Pa",
    "Huyện Văn Bàn",
  ],
  "Long An": [],
  "Nam Định": [
    "Thành phố Nam Định",
    "Huyện Mỹ Lộc",
    "Huyện Vụ Bản",
    "Huyện Ý Yên",
    "Huyện Nghĩa Hưng",
    "Huyện Nam Trực",
    "Huyện Trực Ninh",
    "Huyện Xuân Trường",
    "Huyện Giao Thủy",
    "Huyện Hải Hậu",
  ],
  "Nghệ An": [
    "Thành phố Vinh",
    "Thị xã Cửa Lò",
    " Thị xã Thái Hoà",
    "Huyện Quế Phong",
    "Huyện Quỳ Châu",
    " Huyện Kỳ Sơn",
    "Huyện Tương Dương",
    "Huyện Nghĩa Đàn",
    "Huyện Quỳ Hợp",
    " Huyện Quỳnh Lưu",
    "Huyện Con Cuông",
    "   Huyện Tân Kỳ",
    " Huyện Anh Sơn",
    " Huyện Diễn Châu",
    " Huyện Yên Thành",
    "Huyện Đô Lương",
    " Huyện Thanh Chương",
    "Huyện Nghi Lộc",
    " Huyện Nam Đàn",
    "Huyện Hưng Nguyên",
    "Thị xã Hoàng Mai",
  ],
  "Ninh Bình": [],
  "Ninh Thuận": [],
  "Phú Thọ": [],
  "Phú Yên": [],
  "Quảng Bình": [],
  "Quảng Nam": [],
  "Quảng Ngãi": [],
  "Quảng Ninh": [
    "Thành phố Hạ Long",
    "Thành phố Móng Cái",
    "Thành phố Cẩm Phả",
    "Thành phố Uông Bí",
    "Huyện Bình Liêu",
    "Huyện Tiên Yên",
    "Huyện Đầm Hà",
    "Huyện Hải Hà",
    "Huyện Ba Chẽ",
    " Huyện Vân Đồn",
    "Huyện Hoành Bồ",
    "Thị xã Đông Triều",
    "Thị xã Quảng Yên",
    "Huyện Cô Tô",
  ],
  "Quảng Trị": [],
  "Sóc Trăng": [],
  "Sơn La": [],
  "Tây Ninh": [],
  "Thái Bình": [
    "Thành phố Thái Bình",
    "Huyện Quỳnh Phụ",
    "  Huyện Hưng Hà",
    "Huyện Đông Hưng",
    "  Huyện Thái Thụy",
    "   Huyện Tiền Hải",
    "Huyện Kiến Xương",
    "Huyện Vũ Thư",
  ],
  "Thái Nguyên": [
    "Thành phố Thái Nguyên",
    " Thành phố Sông Công",
    " Huyện Định Hóa",
    "Huyện Phú Lương",
    " Huyện Đồng Hỷ",
    "Huyện Võ Nhai",
    "Huyện Đại Từ",
    "Thị xã Phổ Yên",
    "Huyện Phú Bình",
  ],
  "Thanh Hóa": [
    "Thành phố Thanh Hóa",
    "Thị xã Bỉm Sơn",
    "Thị xã Sầm Sơn",
    " Huyện Mường Lát",
    "Huyện Quan Hóa",
    " Huyện Bá Thước",
    " Huyện Quan Sơn",
    " Huyện Lang Chánh",
    "  Huyện Ngọc Lặc",
    " Huyện Cẩm Thủy",
    "Huyện Thạch Thành",
    "Huyện Hà Trung",
    "Huyện Vĩnh Lộc",
    "Huyện Yên Định",
    "    Huyện Thọ Xuân",
    " Huyện Thường Xuân",
    "   Huyện Triệu Sơn",
    "Huyện Thiệu Hóa",
    "  Huyện Hoằng Hóa",
    "Huyện Hậu Lộc",
    "Huyện Nga Sơn",
    " Huyện Như Xuân",
    "Huyện Như Thanh",
    "Huyện Nông Cống",
    "Huyện Đông Sơn",
    "Huyện Quảng Xương",
    " Huyện Tĩnh Gia",
  ],
  "Thừa Thiên Huế": [
    "Thành phố Huế",
    "Huyện Phong Điền",
    " Huyện Quảng Điền",
    " Huyện Phú Vang",
    "Thị xã Hương Thủy",
    "Thị xã Hương Trà",
    "Huyện A Lưới",
    "Huyện Phú Lộc",
    "Huyện Nam Đông",
  ],
  "Tiền Giang": [],
  "TP Hồ Chí Minh": [
    "Quận 1",
    "Quận 12",
    "Thành phố Thủ Đức",
    "Quận 9",
    " Quận Gò Vấp",
    " Quận Bình Thạnh",
    " Quận Tân Bình",
    "Quận Tân Phú",
    "Quận Phú Nhuận",
    " Quận 2",
    "Quận 3",
    " Quận 10",
    "Quận 11",
    "Quận 4",
    " Quận 5",
    "Quận 6",
    " Quận 8",
    "Quận Bình Tân",
    "Quận 7",
    "  Huyện Củ Chi",
    "   Huyện Hóc Môn",
    " Huyện Bình Chánh",
    "huyện Nhà Bè",
    " Huyện Cần Giờ,",
  ],
  "Trà Vinh": [],
  "Tuyên Quang": [
    "Thành phố Tuyên Quang",
    "Huyện Lâm Bình",
    "Huyện Nà Hang",
    " Huyện Chiêm Hóa",
    " Huyện Hàm Yên",
    " Huyện Yên Sơn",
    " Huyện Sơn Dương",
  ],
  "Vĩnh Long": [],
  "Vĩnh Phúc": [
    "Thành phố Vĩnh Yên",
    "Thị xã Phúc Yên",
    "Huyện Lập Thạch",
    "Huyện Tam Dương",
    "Huyện Tam Đảo",
    "Huyện Bình Xuyên",
    " Huyện Yên Lạc",
    "Huyện Vĩnh Tường",
    "Huyện Sông Lô",
  ],
  "Yên Bái": [
    "Thành phố Yên Bái",
    " Thị xã Nghĩa Lộ",
    "Huyện Lục Yên",
    "Huyện Văn Yên",
    "Huyện Mù Căng Chải",
    "Huyện Trấn Yên",
    "Huyện Trạm Tấu",
    "Huyện Văn Chấn",
    "Huyện Yên Bình",
  ],
};
