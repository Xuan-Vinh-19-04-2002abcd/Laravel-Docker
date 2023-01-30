<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory
 */
class PitchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $array_price = ['200.000', '250.000', '300.000'];
        $array_address = ["Trung tâm Thể dục thể thao Quốc Phòng 3 – 98 Tiểu La, Đà Nẵng",
        "Số 22 đường 2/9 – Quận Hải Châu – TP Đà Nẵng",
        "số 07 đường Duy Tân, Quận Hải Châu, Tp.Đà Nẵng",
        "Số 243-Trường Chinh – Quận Thanh Khê, Đà Nẵng",
        "Số 560 – Trưng Nữ Vương – quận Hải Châu – TP. Đà Nẵng",
        "Số 86 – Duy Tân –  Đà Nẵng",
        "Số 18 – Ba Đình – quận Hải Châu – TP. Đà Nẵng",
        "số 498 – Nguyễn Hữu Thọ – Khuê Trung – Cẩm Lệ – Đà Nẵng",
        "số 02 Vũ Văn Dũng, An Hải Tây, Sơn Trà, Thành phố Đà Nẵng",
        "704 Hoa Vang – Quận Liên Chiểu,  TP Đà Nẵng"];
        $array_name = ["Chuyên Việt","Tuyên Sơn","Duy Tân","Võ Chí Công","Xuân 68","Hòa Xuân"," Trường Chinh","Trưng Nữ Vương","Trang Hoàng","Ba Đình"];
        $array_image = [
            "https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.danang43.vn%2Fwp-content%2Fuploads%2F2015%2F06%2Fsan-bong-nhan-tao-da-nang.jpg&imgrefurl=https%3A%2F%2Fwww.danang43.vn%2Fdanh-sach-cac-san-bong-da-mini-tai-da-nang-p4240.html&tbnid=6woBWO1Fn0mZXM&vet=12ahUKEwiu-rSmg7z8AhVg_zgGHSVhBSAQMygAegQIARA8..i&docid=EtgzYyZm84P1XM&w=590&h=394&q=get%20api%20s%C3%A2n%20b%C3%B3ng%20%C4%91%C3%A0%20n%E1%BA%B5ng&ved=2ahUKEwiu-rSmg7z8AhVg_zgGHSVhBSAQMygAegQIARA8",
            "https://www.google.com/imgres?imgurl=https%3A%2F%2Fnoithatbinhminh.com.vn%2Fwp-content%2Fuploads%2F2018%2F09%2Fco-nhan-tao-san-bong-da-nang.jpg&imgrefurl=https%3A%2F%2Fnoithatbinhminh.com.vn%2Fsan-bong-da-co-nhan-tao-da-nang%2F&tbnid=-7uPP4VpWb6pUM&vet=12ahUKEwiu-rSmg7z8AhVg_zgGHSVhBSAQMygCegQIARBA..i&docid=7NmXMJn19sYV2M&w=640&h=353&q=get%20api%20s%C3%A2n%20b%C3%B3ng%20%C4%91%C3%A0%20n%E1%BA%B5ng&ved=2ahUKEwiu-rSmg7z8AhVg_zgGHSVhBSAQMygCegQIARBA",
            "https://www.google.com/imgres?imgurl=https%3A%2F%2Fdongphucmientrung.vn%2FStoreData%2FPageData%2F600%2Fsan-bong-da-o-da-nang-tuyen-son.jpg&imgrefurl=https%3A%2F%2Fdongphucmientrung.vn%2Fsan-bong-da-o-da-nang.aspx&tbnid=aS6fjiJIkUNEqM&vet=12ahUKEwiu-rSmg7z8AhVg_zgGHSVhBSAQMygIegQIARBM..i&docid=Y1mUOCUsaYS6yM&w=640&h=480&q=get%20api%20s%C3%A2n%20b%C3%B3ng%20%C4%91%C3%A0%20n%E1%BA%B5ng&ved=2ahUKEwiu-rSmg7z8AhVg_zgGHSVhBSAQMygIegQIARBM",
            "https://www.google.com/imgres?imgurl=https%3A%2F%2Ftoplist.vn%2Fimages%2F800px%2Fsan-bong-da-mini-hoa-xuan-617822.jpg&imgrefurl=https%3A%2F%2Ftoplist.vn%2Ftop-list%2Fsan-bong-nhan-tao-chat-luong-nhat-tai-da-nang-46428.htm&tbnid=Ln2g1T5PdufHAM&vet=12ahUKEwiu-rSmg7z8AhVg_zgGHSVhBSAQMygTegQIARBi..i&docid=V802B7GvL3_-GM&w=800&h=533&q=get%20api%20s%C3%A2n%20b%C3%B3ng%20%C4%91%C3%A0%20n%E1%BA%B5ng&ved=2ahUKEwiu-rSmg7z8AhVg_zgGHSVhBSAQMygTegQIARBi",
            "https://www.google.com/imgres?imgurl=https%3A%2F%2Ftop1danang.com%2FStoreData%2Fimages%2Fsan-co-nhan-tao-da-nang-viet-han.png&imgrefurl=https%3A%2F%2Ftop1danang.com%2Fgiai-tri%2Fsan-co-nhan-tao-da-nang.html&tbnid=H25VV4B2XmOVLM&vet=12ahUKEwiu-rSmg7z8AhVg_zgGHSVhBSAQMygcegQIARB5..i&docid=Z3hNDu6_Qq6HZM&w=900&h=600&q=get%20api%20s%C3%A2n%20b%C3%B3ng%20%C4%91%C3%A0%20n%E1%BA%B5ng&ved=2ahUKEwiu-rSmg7z8AhVg_zgGHSVhBSAQMygcegQIARB5",
            "https://www.google.com/url?sa=i&url=https%3A%2F%2Ftoplistdanang.com%2Fdich-vu%2Fsan-bong-da-da-nang%2F&psig=AOvVaw2F8RYFfnWDl-gpxm7_gvEg&ust=1673406544387000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCLDlvsqDvPwCFQAAAAAdAAAAABAD",
            "https://www.google.com/imgres?imgurl=https%3A%2F%2Fthegioithethao.vn%2Fimages%2Fmenus%2Fresized%2Fden-the-thao-1-_1643253206.jpg&imgrefurl=https%3A%2F%2Fthegioithethao.vn%2Fsan-bong-ps2%2Fkhu-vuc-da-nang.html&tbnid=AsGroTzFXTfJkM&vet=10CAQQxiAoA2oXChMIsOW-yoO8_AIVAAAAAB0AAAAAEAY..i&docid=mNJ335SqoGfawM&w=528&h=360&itg=1&q=get%20api%20s%C3%A2n%20b%C3%B3ng%20%C4%91%C3%A0%20n%E1%BA%B5ng&ved=0CAQQxiAoA2oXChMIsOW-yoO8_AIVAAAAAB0AAAAAEAY",
            "https://www.google.com/imgres?imgurl=https%3A%2F%2Fthethaophongson.vn%2Fwp-content%2Fuploads%2F2020%2F02%2Ftrung-tam-the-duc-the-thao-phong-son-4.jpg&imgrefurl=https%3A%2F%2Fthethaophongson.vn%2Fthue-san%2F&tbnid=YHbOgeCdyJ2H9M&vet=10CAoQxiAoCWoXChMIsOW-yoO8_AIVAAAAAB0AAAAAEAY..i&docid=-zZBWpZKGsM35M&w=500&h=500&itg=1&q=get%20api%20s%C3%A2n%20b%C3%B3ng%20%C4%91%C3%A0%20n%E1%BA%B5ng&ved=0CAoQxiAoCWoXChMIsOW-yoO8_AIVAAAAAB0AAAAAEAY",
            "https://www.google.com/imgres?imgurl=https%3A%2F%2Ftoplist.vn%2Fimages%2F800px%2Fsan-bong-da-mini-hoa-xuan-617822.jpg&imgrefurl=https%3A%2F%2Ftoplist.vn%2Ftop-list%2Fsan-bong-nhan-tao-chat-luong-nhat-tai-da-nang-46428.htm&tbnid=Ln2g1T5PdufHAM&vet=12ahUKEwiu-rSmg7z8AhVg_zgGHSVhBSAQMygTegQIARBi..i&docid=V802B7GvL3_-GM&w=800&h=533&q=get%20api%20s%C3%A2n%20b%C3%B3ng%20%C4%91%C3%A0%20n%E1%BA%B5ng&ved=2ahUKEwiu-rSmg7z8AhVg_zgGHSVhBSAQMygTegQIARBi",
            "https://www.google.com/imgres?imgurl=http%3A%2F%2Fimgs.baobacgiang.com.vn%2F2017%2F03%2F21%2F10%2F20170321104026-35a1.jpg&imgrefurl=http%3A%2F%2Fbaobacgiang.com.vn%2Fbg%2Fthe-thao%2F177110%2Fsan-co-nhan-tao-giai-con-khat-cho-nguoi-yeu-bong-da.html&tbnid=5yM_Oin_EuriDM&vet=10CB8QMyh3ahcKEwjAzqb5g7z8AhUAAAAAHQAAAAAQAg..i&docid=MGmyzqf5MDQUaM&w=670&h=410&q=s%C3%A2n%20c%E1%BB%8F%20nh%C3%A2n%20t%E1%BA%A1o&ved=0CB8QMyh3ahcKEwjAzqb5g7z8AhUAAAAAHQAAAAAQAg",
        ];

        return [
            'namepitch' => $array_name[rand(0,9)],
            'address' => $array_address[rand(0,8)],
            'phonenumber' =>fake()->phoneNumber(),
            'image' => $array_image[rand(0,9)],
            'price_hour' => $array_price[rand(0,2)]
        ];
    }
}
