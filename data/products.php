<?php
// Dealers
$dealers = ["Viết Sơn - 150ter Bùi Thị Xuân",
            "Long Binh - 50 Đ. Nguyễn Cư Trinh",
            "Thành Nhân - 180 Đ. Bùi Thị Xuân"];

// Products 
class Product
{   
    public $name;  // tên sản phẩm
    public $type;  // loại sản phẩm e.g. cpu,ram,...
    public $group; // nhóm sản phẩm e.g. pc hay phụ kiện
    public $price; // giá 
    public $note; // ghi chú
    public $sub_note;  // ghi chú dưới
    public $side_note;  // ghi chú ngang
    public $img_path;
    public $display;
    public $popup;

    public function __construct($name="", $type = "", $price = 0, $note = "", $sub_note = "", $side_note = "", $img_path = "", $display = True, $popup = ""){
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->note = $note;
        $this->sub_note = $sub_note;
        $this->side_note = $side_note;
        $this->img_path = $img_path;
        $this->display = $display;
        $this->popup = $popup;
    }
}

// ---- CPU ----
$amd_ryzen3_3200g = new Product(name:"AMD Ryzen 3 3200G", type:"cpu", price: 1953, note:"", sub_note:"4 Cores/4 Threads, 4M Cache");
$amd_ryzen3_4300g = new Product(name:"AMD Ryzen 3 4300G", type:"cpu", price: 2945, note:"", sub_note:"4 Cores/8 Threads, 6M Cache");
$amd_ryzen5_5500gt = new Product(name:"AMD Ryzen 5 5500GT", type:"cpu", price: 0, note:"", sub_note:"6 Cores/12 Threads, 19M Cache");
$amd_ryzen3_4350g = new Product(name:"AMD Ryzen 3 Pro 4350G", type:"cpu", price: 2580, note:"", sub_note:"4 Cores/8 Threads, 4M Cache"); 
$amd_ryzen5_4650g = new Product(name:"AMD Ryzen 5 PRO 4650G", type:"cpu", price: 3125, note:"", sub_note:"6 Cores/12 Threads, 8M Cache"); 
$amd_ryzen7_5700g = new Product(name:"AMD Ryzen 7 5700G", type:"cpu", price: 5671, note:"", sub_note:"8 Cores/16 Threads, 16M Cache"); 
$amd_ryzen5_5600x = new Product(name:"AMD Ryzen 5 5600X", type:"cpu", price: 3643, note:"", sub_note:"6 Cores/12 Threads, 32M Cache"); 
$amd_ryzen5_7500f = new Product(name:"AMD Ryzen 5 7500F", type:"cpu", price: 0, note:"", sub_note:"6 Cores/12 Threads, 38M Cache"); 
$amd_ryzen7_7800x3d = new Product(name:"AMD Ryzen 7 7800X3D", type:"cpu", price: 10784, note:"", sub_note:"8 Cores/16 Threads, 96M Cache"); 

$intel_g6405 = new Product(name:"Intel Pentium Gold G6405", type:"cpu", price: 0, note:"", sub_note:"2 Cores/4 Threads, 4M Cache");
$intel_i3_10105 = new Product(name:"Intel Core I3 10105", type:"cpu", price:  0, note:"", sub_note:"4 Cores/8 Threads, 6M Cache");
$intel_i5_10400 = new Product(name:"Intel Core I5 10400", type:"cpu", price:  0, note:"", sub_note:"6 Cores/12 Threads, 12M Cache");

$intel_i3_12100 = new Product(name:"Intel Core I3 12100", type:"cpu", price: 0, note:"", sub_note:"4 Cores/8 Threads, 12M Cache");
$intel_i5_12400 = new Product(name:"Intel Core I5 12400", type:"cpu", price: 0, note:"", sub_note:"6 Cores/12 Threads, 18M Cache");  
$intel_i5_14400 = new Product(name:"Intel Core I5 14400", type:"cpu", price: 0, note:"", sub_note:"10 Cores/16 Threads, 20M Cache");  
$intel_i7_14700F = new Product(name:"Intel Core I7 14700F", type:"cpu", price: 0, note:"", sub_note:"20 Cores/28 Threads, 33M Cache");

$intel_n100 = new Product(name:"Intel N100", type:"cpu", price:0, note:"", sub_note:"4 Cores/4 Threads, 6M Cache");

$amd_4124p = new Product(name:"AMD EPYC 4124P", type:"cpu", price:0, note:"", sub_note:"4 Cores/8 Threads, 16M Cache");
$amd_4244p = new Product(name:"AMD EPYC 4244P", type:"cpu", price:0, note:"", sub_note:"6 Cores/12 Threads, 32M Cache");
$amd_4344p = new Product(name:"AMD EPYC 4344P", type:"cpu", price:0, note:"", sub_note:"8 Cores/16 Threads, 32M Cache");
$amd_4464p = new Product(name:"AMD EPYC 4464P", type:"cpu", price:0, note:"", sub_note:"12 Cores/24 Threads, 64M Cache");
$amd_4564p = new Product(name:"AMD EPYC 4564P", type:"cpu", price:0, note:"", sub_note:"16 Cores/32 Threads, 64M Cache");


// ---- Mini PC ----
$minipc_nuc12i3 = new Product(name:"I3-1220P <br>ASUS NUC12 PRO Tall RNUC12WSHI300000I", type:"minipc", price: 8219, note:["port_front" => "2 x USB 3.2, 1 x 3.5mm Headset Jack",
                                                                                                                           "port_rear" => "1 x USB 3.2, 1 x USB 2.0, 2 x Thunderbolt, 1 x LAN 1Gb/s Ethernet",
                                                                                                                           "display" => "2 x HDMI"], sub_note:"10 Cores/12 Threads, 12M Cache"); 
$minipc_nuc12i5 = new Product(name:"I5-1240P <br>ASUS NUC12 PRO Tall RNUC12WSHI500000I", type:"minipc", price: 10844, note:["port_front" => "2 x USB 3.2, 1 x 3.5mm Headset Jack",
                                                                                                                           "port_rear" => "1 x USB 3.2, 1 x USB 2.0, 2 x Thunderbolt, 1 x LAN 1Gb/s Ethernet",
                                                                                                                           "display" => "2 x HDMI"], sub_note:"12 Cores/16 Threads, 12M Cache"); 
$minipc_nuc12i7 = new Product(name:"I7-1260P <br>ASUS NUC12 PRO Tall RNUC12WSHI700000I", type:"minipc", price: 15844, note:["port_front" => "2 x USB 3.2, 1 x 3.5mm Headset Jack",
                                                                                                                           "port_rear" => "1 x USB 3.2, 1 x USB 2.0, 2 x Thunderbolt, 1 x LAN 1Gb/s Ethernet",
                                                                                                                           "display" => "2 x HDMI"], sub_note:"12 Cores/16 Threads, 18M Cache"); 

$minipc_nuc13i3 = new Product(name:"I3-1315U <br>Asus NUC13 PRO Tall RNUC13ANHI300001I", type:"minipc", price: 10182, note:["port_front" => "2 x USB 3.2, 1 x 3.5mm Headset Jack",
                                                                                                                           "port_rear" => "1 x USB 3.2, 1 x USB 2.0, 2 x Thunderbolt, 1 x LAN 1Gb/s Ethernet",
                                                                                                                           "display" => "2 x HDMI"], sub_note:"6 Cores/8 Threads, 10M Cache, IPU"); 
$minipc_nuc13i5 = new Product(name:"I5-1340P <br>Asus NUC13 PRO Tall RNUC13ANHI500001I", type:"minipc", price: 13198, note:["port_front" => "2 x USB 3.2, 1 x 3.5mm Headset Jack",
                                                                                                                           "port_rear" => "1 x USB 3.2, 1 x USB 2.0, 2 x Thunderbolt, 1 x LAN 1Gb/s Ethernet",
                                                                                                                           "display" => "2 x HDMI"], sub_note:"12 Cores/16 Threads, 12M Cache"); 
$minipc_nuc13i7 = new Product(name:"I7-1360P <br>ASUS NUC13 PRO Tall RNUC13ANHI700000I", type:"minipc", price: 17723, note:["port_front" => "2 x USB 3.2, 1 x 3.5mm Headset Jack",
                                                                                                                           "port_rear" => "1 x USB 3.2, 1 x USB 2.0, 2 x Thunderbolt, 1 x LAN 1Gb/s Ethernet",
                                                                                                                           "display" => "2 x HDMI"], sub_note:"12 Cores/16 Threads, 18M Cache"); 


// ---- VGA ----
$no_vga = new Product(name:"Không VGA", type:"vga", price: 5313, note:[97,47,108,365,127], sub_note:"");
$asus_3050 = new Product(name:"ASUS DUAL RTX3050 8G OC V2", type:"vga", price: 5313, note:[97,47,108,365,127], sub_note:"");
$asus_4060 = new Product(name:"ASUS DUAL RTX4060 O8G V2", type:"vga", price: 8853, note:[97,47,108,365,127], sub_note:"");  //
$asus_4060ti = new Product(name:"ASUS DUAL RTX4060TI O16G EVO", type:"vga", price: 15375, note:"", sub_note:"");  //
$asus_4070 = new Product(name:"ASUS DUAL RTX4070 012G EVO", type:"vga", price: 19938, note:[152,78,171,405,148], sub_note:""); //
$asus_4070ti = new Product(name:"ASUS TUF RTX4070TI SUPER O16G", type:"vga", price: 30338, note:[204,99,214,350,161], sub_note:"");//
$asus_6500 = new Product(name:"ASUS DUAL RX6500XT O4G", type:"vga", price: 0, note:[204,99,214,350,161], sub_note:"");//
$asus_6600 = new Product(name:"ASUS DUAL RX6600 8G V3", type:"vga", price: 0, note:[204,99,214,350,161], sub_note:"");//
$asus_6500 = new Product(name:"ASUS DUAL RX6500XT O4G V2", type:"vga", price: 0, note:[204,99,214,350,161], sub_note:"");//
$powercolor_7600xt = new Product(name:"POWERCOLOR FIGHTER RX7600XT 16G", type:"vga", price: 11075, note:[129,56,150,462,121], sub_note:"");

$asus_9070 = new Product(name:"ASUS PRIME RX9070XT O16G", type:"vga", price: 0, note:[204,99,214,350,161], sub_note:"");//
$asus_5070 = new Product(name:"ASUS TUF RTX5070 O12G GAMING", type:"vga", price: 0, note:[204,99,214,350,161], sub_note:"");//
$asus_5070ti = new Product(name:"ASUS PRIME RTX5070TI O16G ", type:"vga", price: 0, note:[204,99,214,350,161], sub_note:"");//
$palit_5070 = new Product(name:"PALIT RTX5070 GAMING PRO 12GB ", type:"vga", price: 0, note:[204,99,214,350,161], sub_note:"");//

$asus_gt710 = new Product(name:"ASUS GT710-SL-2GD5-BRK-EVO ", type:"vga", price: 0, note:[204,99,214,350,161], sub_note:"");//

$palit_5070 = new Product(name:"PALIT RTX5070 GAMINGPRO 12GB", type:"vga", price: 0, note:[204,99,214,350,161], sub_note:"");//
$palit_5070ti = new Product(name:"PALIT RTX5070TI GAMINGPRO-S OC 16GB ", type:"vga", price: 0, note:[204,99,214,350,161], sub_note:"");//
$palit_5080 = new Product(name:"PALIT RTX5080 GAMINGPRO OC 16GB", type:"vga", price: 0, note:[204,99,214,350,161], sub_note:"");//



//---- MAINBOARD ----

$asrock_x870 = new product (name :"ASROCK X870 Steel Legend Wifi", type:"main", price:1438, note:["port"=>"2 x USB4 , 3 x USB 3.2 , 2 x USB 3.2 , 4 x USB 2.0 , 1 x lan RJ-45  ",
                                                                                                "display"=>"1 x HDMI " ], sub_note:"");
$asrock_x870 -> popup = '
<div class="modal-header">
            
<button type="button" class="close" data-dismiss="modal">x</button>
    </div>
    <div class="modal-body">
         <h4>ASUS PRIME A520M-K D4</h4>
        <img src="../assets/images/X870 Steel Legend WiFi(L1).png" alt="a520" style="width: 100%; max-width: 400px; display: block; margin: 10px auto;">

        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
       
        <tbody>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Chipset</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">AMD X870</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Socket</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">AMD Socket AM5</td>
            </tr>
            
            <tr>
                <td style="padding:10px;border:1px soild #ddd;"><b>Loại Ram</b></td>
                <td style="padding:10px;border:1px soild #ddd;"><b>DDR5</b></td>

            </tr>

            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Kích thước </b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">305 mm x 244 mm (ATX)</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Khe RAM tối đa</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">4 khe</td>
            </tr>
            
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Dung lượng Ram hỗ trợ tối đa</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">256 GB</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Tốc độ Bus</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">up to 8000+(OC)</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Kết nối mạng LAN</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">	1 x 2.5 Gigabit LAN 10/100/1000/2500 Mb/s</td>
            </tr>
             <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Cổng xuất hình</b></td>
                 <td style="padding: 10px; border: 1px solid #ddd;">
                    1 x HDMI 2.1 TMDS/FRL 8G Compatible, supports HDR, HDCP 2.3 and max. resolution up to 4K 120Hz, 2 x USB4, support HDCP 2.3 and max. resolution up to 8K 30Hz
                 </td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Khe cắm</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">
                   1 x Blazing M.2 2280 PCIe Gen5x4 (128 Gb/s), 1 x Hyper M.2 2230/2260/2280 PCIe Gen4x4 (64 Gb/s), 1 x Hyper M.2 2260/2280 PCIe Gen4x4 (64 Gb/s), 4 x SATA3 6.0 Gb/s
                </td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Giao Tiếp VGA</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">
                    1 x PCIe 5.0 x16, 1 x PCIe 4.0 x16, 1 x Vertical M.2 Socket (Key E)
                </td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Số cổng USB</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">
                    <br>Sau: 2 x USB4 Type-C, 2 x USB 3.2 Gen2 Type-A, 3 x USB 3.2 Gen1 Type-A, 4 x USB 2.0</br>
                    <br>Trước: 1 x USB 3.2 Gen2x2 Type-C, 2 x USB 3.2 Gen1 Type-A , 4 x USB 2.0 </br>
                </td>
            </tr>
            
            
        </tbody>
    </table>
    <br></br>
        <a href="https://www.asrock.com/mb/AMD/X870%20Steel%20Legend%20WiFi/index.asp" target="_blank">Xem thêm ></a>
    </div>
';


$asrock_b450M_hdv = new product (name:"ASROCK B450M-HDV",type:"main", price: 1438, note:["port"=>"4 x USB 3.1, 2 x USB 2.0, 1 x PS/2 keyboard/mouse port, 1 x RJ-45 Lan Port with Led",
                                                                                    "display" => "1 x HDMI , 1 x D-Sub , 1 x DVI-D"] ,sub_note:"");
$asrock_b450M_hdv -> popup= '
<div class="modal-header">
            
<button type="button" class="close" data-dismiss="modal">x</button>
    </div>
    <div class="modal-body">
         <h4> ASROCK B450M-HDV </h4>
        <img src="../assets/images/B450M-HDV R4.0(M1).png" alt="a520" style="width: 100%; max-width: 400px; display: block; margin: 10px auto;">

        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
       
        <tbody>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Chipset</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">AM4 B450</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Socket</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">AM4</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Loại ram</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">DDR4</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Kích thước </b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Micro ATX Form Factor (23.0cm x 20.1cm).</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Khe RAM</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">2 khe cắm Ram </td>
            </tr>
          
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Hỗ trợ bộ nhớ tối đa</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">64GB</td>
            </tr>
           
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Khe cắm</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">
                  1 x M2, 4 x SATA3 6.0 Gb/s
                </td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Kết nối mạng LAN</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">	10/100/1000 Mb/s</td>
            </tr>
             <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Cổng xuất hình</b></td>
                 <td style="padding: 10px; border: 1px solid #ddd;">
                    1 x HDMI, 1 x DVI-D, 1 x D-Sub
                 </td>
            </tr>
        
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Số cổng USB</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">
                  <br>2 x USB 2.0, 4 x USB 3.1 Gen1</br>
                </td>
            </tr>
       
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Tốc độ Bus</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">DDR4 3200Mhz / 2933Mhz / 2667Mhz / 2400Mhz / 2133Mhz</td>
            </tr>
            
        </tbody>
    </table>
    <br></br>
        <a href="https://www.asrock.com/MB/AMD/B450M-HDV%20R4.0/index.vn.asp#Specification" target="_blank">Xem thêm ></a>
    </div>
';

$asus_prime_h510m = new Product(name:"ASUS PRIME H510M-K R2.0-CSM-SI",type:"main",note:["port"=>"2 x USB 2.0 , 4 x USB 3.1 , 3 x Audio jacks, 1 x keyboard/mouse PS/2, 1 x Realtek 1Gb Ethernet",
                                                                                        "display" =>"1 x HDMI , 1 x VGA"], sub_note:"");
$asus_prime_h510m -> popup = '
<div class="modal-header">
            
<button type="button" class="close" data-dismiss="modal">x</button>
    </div>
    <div class="modal-body">
         <h4>ASUS PRIME A520M-K D4</h4>
        <img src="../assets/images/MAINBOARD_510.png" alt="a520" style="width: 100%; max-width: 400px; display: block; margin: 10px auto;">

        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
       
        <tbody>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Chipset</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">INTEL</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Socket</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">LGA 1200</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Kích thước </b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">ATX</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Khe RAM tối đa</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">4 khe</td>
            </tr>
            
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Hỗ trợ bộ nhớ tối đa</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">64GB</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Tốc độ Bus</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">
                  <br>  DDR4 3200(OC)/3000(OC)/2933/2800/2666/2400/2133 Non-ECC </br>
                  <br> 10th Gen Intel Core i7/i9 2933/2800/2666/2400/2133 </br>
                  <br> 11th Gen Intel 3200(OC)/3000(OC)/2933/2800/2666/2400/ </br>
                </td>
            </tr>
           
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Kiểu khe M.2 hỗ trợ</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">M.2 SATA/NVMe</td>
            </tr>
             <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Cổng xuất hình</b></td>
                 <td style="padding: 10px; border: 1px solid #ddd;">
                     1 x VGA, 1 x HDMI
                 </td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Khe PCI</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">
                    1 x PCI Express 4.0/3.0 x 16
                </td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Lưu trữ </b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">
                    1 x M.2 ,4 x SATA 6Gb/s
                </td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Lan</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">1 x Realtek 1Gb Ethernet</td>
            </tr>
            
            
        </tbody>
    </table>
    <br></br>
        <a href="https://www.asus.com/motherboards-components/motherboards/csm/prime-h510m-k-r2-0-csm/" target="_blank">Xem thêm ></a>
    </div>
';

$asrock_h510M_A = new product (name: "ASROCK H510M-A/M.2 SE" ,type:"main",note:["port" =>"2 x USB 2.0, 4 x USB 3.2 ,1 x Cổng LAN RJ-45 , 1 x keyboard/mouse PS/2,Giắc cắm âm thanh HD: Cổng vào / Loa trước / Micrô",
                                                                                "display"=> "1 x D-Sub Port, 1 x DisplayPort 1.2, 1 x HDMI Port"],sub_note:"");
$asrock_h510M_A  -> popup= '
<div class="modal-header">
            
<button type="button" class="close" data-dismiss="modal">x</button>
    </div>
    <div class="modal-body">
            <h4> ASROCK B450M-HDV </h4>
        <img src="../assets/images/H510M-AM.2 SE.png" alt="a520" style="width: 100%; max-width: 400px; display: block; margin: 10px auto;">

        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        
        <tbody>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Chipset</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Intel H370</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Socket</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">LGA 1200</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Loại Ram</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">DDR4</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Kích thước </b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Micro ATX (226 mm x 188 mm)</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Khe RAM</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">2 khe cắm Ram </td>
            </tr>
            
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Hỗ trợ bộ nhớ tối đa</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">64GB</td>
            </tr>
            
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Kết nối mạng LAN</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">	PCIE x1 Gigabit LAN 10/100/1000 Mb/s</td>
            </tr>
                <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Cổng xuất hình</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                        1 x D-Sub Port, 1 x DisplayPort 1.2, 1 x HDMI Port      
                    </td>
            </tr>
        
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Số cổng USB</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">
                    <br>2 x USB 2.0, 4 x USB 3.2 Gen1</br>
                </td>
            </tr>
        
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Tốc độ Bus</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">2933 / 2800 / 2666 / 2400 / 2133 MHz</td>
            </tr>
                <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Giao Tiếp VGA</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">4 x SATA3 6.0 Gb/s</td>
            </tr>
            
        </tbody>
    </table>
    <br></br>
        <a href="https://www.asrock.com/MB/AMD/B450M-HDV%20R4.0/index.vn.asp#Specification" target="_blank">Xem thêm ></a>
    </div>
';
                                                                          

$asus_prime_a520 = new Product(name:"ASUS PRIME A520M-K D4", type:"main", price: 1438, note:["port" => "4 x USB 3.1, 2 x USB 2.0, 3 x Audio jack(s), 1 x PS/2 keyboard/mouse combo port(s), 1 x LAN 1Gb/s Ethernet",
                                                                                     "display" => "1 x HDMI, 1 x VGA/D-sub"], sub_note:"");
$asus_prime_a520 -> popup= '
<div class="modal-header">
            
<button type="button" class="close" data-dismiss="modal">x</button>
    </div>
    <div class="modal-body">
         <h4>ASUS PRIME A520M-K D4</h4>
        <img src="../assets/images/MAINBOARD_520.png" alt="a520" style="width: 100%; max-width: 400px; display: block; margin: 10px auto;">

        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
       
        <tbody>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Chipset</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">A520</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Socket</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">AM4</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Kích thước </b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Micro-ATX.</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Khe RAM tối đa</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">2 khe.</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Kiểu RAM hỗ trợ</b></td>
                 <td style="padding: 10px; border: 1px solid #ddd;">DDR4.</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Hỗ trợ bộ nhớ tối đa</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">64GB</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Bus RAM hỗ trợ</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">
                    4866(OC), 4600(O.C.), 4466(OC), 4333(OC), 4133(O.C.), 4400(OC), 4266(O.C.), 4200(OC), 4133(OC), 4400(O.C.)
                
                </td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Lưu trữ</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">
                   4 x SATA 3 6Gb/s, 1 x M.2 SATA/NVMe 
                </td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Kiểu khe M.2 hỗ trợ</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">M.2 SATA/NVMe</td>
            </tr>
             <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Cổng xuất hình</b></td>
                 <td style="padding: 10px; border: 1px solid #ddd;">
                     1 x VGA/D-sub, 1 x HDMI
                 </td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Khe PCI</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">
                     1x PCIe 3.0 x16, 2 x PCIe 3.0 x1
                </td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Số cổng USB</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">
                  <br>-  4 x USB 3.2 (tối đa 6)</br>
                  <br>-  2 x USB 2.0 (tối đa 6)</br>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Lan</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">1 x LAN 1 Gb/s</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Âm thanh</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Realtek ALC887/897 7.1 Surround Sound CODEC Âm thanh HD</td>
            </tr>
            
        </tbody>
    </table>
    <br></br>
        <a href="https://www.asus.com/vn/motherboards-components/motherboards/prime/prime-a520m-k/" target="_blank">Xem thêm ></a>
    </div>
';

$asus_prime_b550 = new Product(name:"ASUS PRIME B550M-A D4", type:"main", price: 0, note:["port" => "2 x USB 3.2 Gen 2, 4 x USB 3.2 Gen 1, 3 x Audio jack(s), 1 x PS/2 keyboard/mouse combo port(s), 1 x LAN 1Gb/s Ethernet",
                                                                                     "display" => "1 x HDMI, 1 x D-Sub, 1 x DVI"], sub_note:"");
$asus_prime_b550 -> popup ='
<div class="modal-header">
        <h5 class="modal-title">ASUS PRIME B550M-A D4</h5>
        <button type="button" class="close" data-dismiss="modal">x</button>
    </div>
    <div class="modal-body">
        <img src="../assets/images/MAINBOARD_B550M-A.png" alt="B550M-A" style="width: 100%; max-width: 400px; display: block; margin: 10px auto;">
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <thead>
                <tr style="background-color: #f1f1f1;">
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Tính năng</th>
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Mô tả</th>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Chipset</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">AMD B550</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Socket</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">AM4</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kích thước </b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">24.4 cm x 24.4  cm </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Khe RAM tối đa</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">4 khe</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kiểu RAM hỗ trợ</b></td>
                     <td style="padding: 10px; border: 1px solid #ddd;">DDR4</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Hỗ trợ bộ nhớ tối đa</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">128GB</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Bus RAM hỗ trợ</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">4866(O.C)/4800(O.C.)/4400(O.C)/4200(O.C.)/4000(O.C.)/3600(O.C.)/3400(O.C.)
                                                                        /3200/3000/2933/2800/2666/2400/2133 MHz</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Lưu trữ *</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                        4 x SATA 3 6Gb/s,  1 x M.2 SATA/NVMe
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kiểu khe M.2 hỗ trợ </b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">M.2 SATA/NVMe</td>
                </tr>
                 <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Cổng xuất hình</b></td>
                     <td style="padding: 10px; border: 1px solid #ddd;">
                         1  x HDMI, 1  x DVI-D , 1  x VGA
                     </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Khe PCI</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                        1x PCIe 3.0 x16 , 2 x PCIe 3.0 x1 
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Số cổng USB</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                        4 x USB 3.2 Gen 1, 2 x USB 3.2 Gen 2
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Lan</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">1 x LAN 1 Gb/s</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Âm thanh</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Realtek ALC887 7.1 Surround Sound High Definition Audio CODEC</td>
                </tr>
                
            </tbody>
        </table>
         <br></br>
            <a href="https://www.asus.com/vn/motherboards-components/motherboards/prime/prime-b550m-a/" target="_blank">Xem thêm ></a>
        </div>
    ';

$asus_prime_b650_wifi_d5 = new Product(name:"ASUS TUF GAMING B650M-E WIFI", type:"main", price: 4781, note:["port" => "2 x USB 3.2 Gen 2, 2 x USB 3.2 Gen 1, 4 x USB 2.0 ports, 1 x Wi-Fi Module, 3 x Audio jacks, 1 x PS/2 Keyboard/Mouse combo port, 1 x LAN 1Gb/s Ethernet",
                                                                                     "display" => "2 x DisplayPort, 1 x HDMI"], sub_note:"");
$asus_prime_b650_wifi_d5 -> popup ='
<div class="modal-header">
        <h5 class="modal-title">ASUS TUF GAMING B650M-E WIFI</h5>
        <button type="button" class="close" data-dismiss="modal">x</button>
    </div>
    <div class="modal-body">
        <img src="../assets/images/MAINBOARD_B650M-E.jpg" alt="B550M-A" style="width: 100%; max-width: 400px; display: block; margin: 10px auto;">
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <thead>
                <tr style="background-color: #f1f1f1;">
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Tính năng</th>
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Mô tả</th>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Chipset</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">AMD B650 Chipset</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Socket</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">LGA AM5</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kích thước </b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">24.4 cm x 24.4  cm </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Khe RAM tối đa</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">4 khe</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kiểu RAM hỗ trợ</b></td>
                     <td style="padding: 10px; border: 1px solid #ddd;">DDR4</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Hỗ trợ bộ nhớ tối đa</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">128GB</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Bus RAM hỗ trợ</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">4866(O.C)/4800(O.C.)/4400(O.C)/4200(O.C.)/4000(O.C.)/3600(O.C.)/3400(O.C.)
                                                                        /3200/3000/2933/2800/2666/2400/2133 MHz</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Lưu trữ *</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">4 x SATA 3 6Gb/s, 1 x M.2 SATA/NVMe</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kiểu khe M.2 hỗ trợ </b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">M.2 SATA/NVMe</td>
                </tr>
                 <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Cổng xuất hình</b></td>
                     <td style="padding: 10px; border: 1px solid #ddd;">
                        <br> 1  x HDMI </br>
                        <br> 1  x DVI-D </br>
                        <br> 1  x VGA </br>
                     </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Khe PCI</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">1x PCIe 3.0 x16; 2 x PCIe 3.0 x1</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Số cổng USB</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                        4 x USB 3.2 Gen 1, 2 x USB 3.2 Gen 2
                    </td>
                </tr>
               
                  <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Wifi</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Realtek® RTL8125BG 2.5Gbps LAN</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Âm thanh</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Realtek® ALC897 Codec, 7.1-Channel High Definition Audio</td>
                </tr>
                
            </tbody>
        </table>
         <br></br>
            <a href="https://www.asus.com/vn/motherboards-components/motherboards/tuf-gaming/tuf-gaming-b650m-e-wifi/" target="_blank">Xem thêm ></a>
        </div>
    ';
                                                                                 
                                                                                     
$asus_prime_b650_ayw_wifi_d5 = new Product(name:"ASUS B650M-AYW WIFI", type:"main", price: 3506, note:["port" => "2 x USB 10Gbps,2 x USB 5Gbps, 4 x USB 2.0, 1 x Wi-Fi Module, 3 x Audio jacks, 1 x LAN 1Gb/s Ethernet",
                                                                                     "display" => "1 x HDMI"], sub_note:"");
$asus_prime_b650_ayw_wifi_d5 -> popup ='
<div class="modal-header">
        <h5 class="modal-title">ASUS B650M-AYW WIFI</h5>
        <button type="button" class="close" data-dismiss="modal">x</button>
    </div>
    <div class="modal-body">
        <img src="../assets/images/MAINBOARD_B650M_AYW_WIFI.png" alt="B550M-AYW" style="width: 100%; max-width: 400px; display: block; margin: 10px auto;">
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <thead>
                <tr style="background-color: #f1f1f1;">
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Tính năng</th>
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Mô tả</th>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Chipset</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">AMD B650</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Socket</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">AMD Socket AM5</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kích thước </b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Micro-ATX.</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Khe RAM tối đa</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">4 khe</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kiểu RAM hỗ trợ</b></td>
                     <td style="padding: 10px; border: 1px solid #ddd;">DDR5</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Hỗ trợ bộ nhớ tối đa</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">128GB</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Bus RAM hỗ trợ</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Lên đến 6400 MHz</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Lưu trữ *</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                        1 khe M.2 PCIe 5.0 x4, 4 cổng SATA 6Gb/s
                    </td>
                </tr>
               
                 <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Cổng xuất hình</b></td>
                     <td style="padding: 10px; border: 1px solid #ddd;">
                            HDMI , DisplayPort 
                     </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Khe PCI</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                        1 khe PCIe 5.0 x16 , 1 khe PCIe 3.0 x1 
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Số cổng USB</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                         USB 3.2 Gen 2, USB 3.2 Gen 1
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>WIFI</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">WiFi 6E </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Lan</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Realtek 2.5Gb Ethernet</td>
                </tr>
                
                
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Âm thanh</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Realtek ALC897, 7.1 Surround</td>
                </tr>
                
            </tbody>
        </table>
         <br></br>
            <a href="https://www.asus.com/motherboards-components/motherboards/others/b650m-ayw-wifi/" target="_blank">Xem thêm ></a>
        </div>
';

$asus_prime_b650_wifi = new Product(name:"ASUS PRIME B650M-A WIFI II", type:"main", price: 0, note:["port" => "4 x USB 3.2, 4 x USB 2.0, 3 x Audio jacks, 1 x PS/2 Keyboard/Mouse combo port, 1 x LAN 2.5Gb/s Ethernet, 1 x Wi-Fi Module",
                                                                                     "display" => "1 x HDMI, 1 x DisplayPort, 1 x VGA"], sub_note:"");
$asus_prime_b650_wifi -> popup =' 
<div class="modal-header">
        <h5 class="modal-title">ASUS PRIME H610M-K D4</h5>
        <button type="button" class="close" data-dismiss="modal">x</button>
    </div>
    <div class="modal-body">
        <img src="../assets/images/ASUS PRIME B650M-A WIFI II.png" alt="B550M-A" style="width: 100%; max-width: 400px; display: block; margin: 10px auto;">
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <thead>
                <tr style="background-color: #f1f1f1;">
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Tính năng</th>
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Mô tả</th>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Chipset</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">AMD B650 </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Bộ nhớ </b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">4 x DIMM DDR5, tối đa 192GB, hỗ trợ tối đa DDR5-7600+(OC)</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kích thước </b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">mATX (24.4 cm x 24.4 cm)</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Ethernet</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">	1 x Realtek 2.5Gb Ethernet</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Khe Cắm Mở Rộng</b></td>
                     <td style="padding: 10px; border: 1px solid #ddd;">- 1 x PCIe 4.0 x16 (CPU dòng 9000 & 7000) - 1 x PCIe 4.0 x16 (hỗ trợ x8/x4 - CPU dòng 8000) - 2 x PCIe 4.0 x1</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Hỗ trợ không dây</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Wifi 6 : Bluetooth 5.2</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Tiêu chuẩn </b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">M - ATX</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Khe ổ cứng</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                         4 x SATA 6Gb/s port
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Số khe RAM</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">4x DDR5 DIMM Slot</td>
                </tr>
            </tbody>
        </table>
         <br></br>
            <a href="https://www.asus.com/vn/motherboards-components/motherboards/prime/prime-b650m-a-wifi-ii/" target="_blank">Xem thêm ></a>
        </div>
';

                                                                              
$asus_proart_b650_creator = new Product(name:"ASUS PROART B650-CREATOR", type:"main", price: 0, note:["port" => "5 x USB 3.2, 2 x USB 2.0, 5 x Audio jacks, 1 x Realtek 2.5Gb Ethernet, 1 x Realtek 1Gb Ethernet",
                                                                                     "display" => "1 x HDMI, 1 x DisplayPort (Input only), 1 x USB Type-C (supports DisplayPort output)"], sub_note:"");
$asus_proart_b650_creator -> popup ='
<div class="modal-header">
        <h5 class="modal-title">ASUS PRIME H610M-K D4</h5>
        <button type="button" class="close" data-dismiss="modal">x</button>
    </div>
    <div class="modal-body">
        <img src="../assets/images/ASUS PROART B650-CREATOR.png" alt="B550M-A" style="width: 100%; max-width: 400px; display: block; margin: 10px auto;">
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <thead>
                <tr style="background-color: #f1f1f1;">
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Tính năng</th>
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Mô tả</th>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Chipset</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">B650</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Socket</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">AM5</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kích thước </b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">ATX</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Khe RAM tối đa</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">DDR5</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kiểu RAM hỗ trợ</b></td>
                     <td style="padding: 10px; border: 1px solid #ddd;">DDR4</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Hỗ trợ bộ nhớ tối đa</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">128GB</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Bus RAM hỗ trợ</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">6400+(O.C), 6200(O.C.), 6000(O.C.), 5800(O.C.), 5600(O.C.), 5400(O.C.), 5200MHz, 5000MHz, 4800MHz</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Lưu trữ </b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                        4 x SATA 3 6Gb/s, 3 x M.2 NVMe
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kiểu khe M.2 hỗ trợ *</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">M.3 NVMe</td>
                </tr>
                 <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Cổng xuất hình</b></td>
                     <td style="padding: 10px; border: 1px solid #ddd;">
                        1 x HDMI, 1 x USB Type-C
                     </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Khe PCI</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                         3 x PCIe 4.0 x16; 1 x PCIe 4.0 x1
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Số cổng USB</
                          1 x USB Type-C(tối đa 2), 3 x USB 3.2( tối đa 5),4 x USB 2.0( tối đa 8)
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Lan</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">1 x LAN 2.5Gb/s, 1 x LAN 1 Gb/s</td>
                </tr>
                
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Âm thanh</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Realtek 7.1 Surround Sound High Definition Audio CODEC</td>
                </tr>
                
            </tbody>
        </table>
         <br></br>
            <a href="https://www.asus.com/vn/motherboards-components/motherboards/proart/proart-b650-creator/" target="_blank">Xem thêm ></a>
        </div>
';
                                                                
                                                                                     
$asus_prime_h610 = new Product(name:"ASUS PRIME H610M-K D4", type:"main", price: 1859, note:["port" => "2 x USB 3.2, 4 x USB 2.0, 3 x Audio jacks, 1 x PS/2 Keyboard/Mouse combo port, 1 x LAN 1Gb/s Ethernet",
                                                                                     "display" => "1 x HDMI, 1 x D-Sub"], sub_note:"");
$asus_prime_h610 -> popup = '
<div class="modal-header">
        <h5 class="modal-title">ASUS PRIME H610M-K D4</h5>
        <button type="button" class="close" data-dismiss="modal">x</button>
    </div>
    <div class="modal-body">
        <img src="../assets/images/MAINBOARD_H610M-K D4.png" alt="B550M-A" style="width: 100%; max-width: 400px; display: block; margin: 10px auto;">
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <thead>
                <tr style="background-color: #f1f1f1;">
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Tính năng</th>
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Mô tả</th>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Chipset</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">H610 Chipset</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Socket</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">1700</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kích thước </b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Micro-ATX</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Khe RAM tối đa</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">2 khe</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kiểu RAM hỗ trợ</b></td>
                     <td style="padding: 10px; border: 1px solid #ddd;">DDR4</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Hỗ trợ bộ nhớ tối đa</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">64GB</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Bus RAM hỗ trợ</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">2800MHz, 2400MHz, 2666MHz, 3000MHz, 3200MHz, 2933MHz, 2133MHz</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Lưu trữ </b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                        4 x SATA 3 6Gb/s ,  1 x M.2 SATA/NVMe 
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kiểu khe M.2 hỗ trợ *</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">M.2 SATA/NVMe</td>
                </tr>
                 <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Cổng xuất hình</b></td>
                     <td style="padding: 10px; border: 1px solid #ddd;">
                         1 x HDMI, 1 x D-sub
                     </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Khe PCI</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                         1 x PCIe 4.0 x16, 1 x PCIe 3.0 x1
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Số cổng USB</
                          2 x USB 3.2 (Tối đa 4),  4 x USB 2.0 (Tối đa 6)
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Lan</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">1 x LAN 1 Gb/s</td>
                </tr>
                
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Âm thanh</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Realtek 7.1 Surround Sound High Definition Audio CODEC*</td>
                </tr>
                
            </tbody>
        </table>
         <br></br>
            <a href="https://www.asus.com/vn/motherboards-components/motherboards/prime/prime-h610m-k-d4/" target="_blank">Xem thêm ></a>
        </div>
    ';
$asus_prime_b760 = new Product(name:"ASUS PRIME B760M-K", type:"main", price:2346 , note:["port" => "4 x USB 3.2, 2 x USB 2.0, 3 x Audio jacks, 1 x PS/2 Keyboard/Mouse combo port, 1 x LAN 2.5Gb/s Ethernet",
                                                                                     "display" => "1 x HDMI, 1 x D-Sub"], sub_note:"");
$asus_prime_b760 ->popup ='
<div class="modal-header">
        <h5 class="modal-title">ASUS PRIME B760M-K</h5>
        <button type="button" class="close" data-dismiss="modal">x</button>
    </div>
    <div class="modal-body">
        <img src="../assets/images/MAINBOARD_H610M-K D4.png" alt="B550M-A" style="width: 100%; max-width: 400px; display: block; margin: 10px auto;">
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <thead>
                <tr style="background-color: #f1f1f1;">
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Tính năng</th>
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Mô tả</th>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Chipset</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Intel® B760</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Socket</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">LGA1700</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kích thước </b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Micro-ATX (mATX)</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Khe RAM tối đa</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">2 khe</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kiểu RAM hỗ trợ</b></td>
                     <td style="padding: 10px; border: 1px solid #ddd;">DDR4</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Hỗ trợ bộ nhớ tối đa</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">64GB</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Bus RAM hỗ trợ</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                        3200/2933/2800/2666/2400/2133 MHz
                    
                    </td>

                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Lưu trữ </b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                        <br>-   1 khe M.2 PCIe 4.0 x4 ,  4 cổng SATA 6Gb/s </br>
                    </td>
                </tr>
               
                 <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Cổng xuất hình</b></td>
                     <td style="padding: 10px; border: 1px solid #ddd;">
                           HDMI 
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Khe PCI</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                        <br>  1 khe PCIe 4.0 x16 , 2 khe PCIe 4.0 x1 </br>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Số cổng USB</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                            USB 3.2 Gen 1, USB 2.0
                    </td>

                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Lan</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Realtek 1Gb Ethernet</td>
                </tr>
                
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Âm thanh</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Realtek High Definition Audio CODEC</td>
                </tr>
                
            </tbody>
        </table>
         <br></br>
            <a href="https://www.asus.com/vn/motherboards-components/motherboards/prime/prime-h610m-k-d4/" target="_blank">Xem thêm ></a>
        </div>
    ';


$asus_prime_b760_d5 = new Product(name:"ASUS TUF GAMING B760M-PLUS II", type:"main", price: 3850 , note:["port" => "1 x USB 20Gbps, 1 x USB 10Gbps , 2 x USB 5Gbps, 4 x USB 2.0 , 5 x Audio jacks, 1 x Optical S/PDIF, 1 x LAN 2.5Gb/s Ethernet",
                                                                                     "display" => "1 x HDMI, 1 x DisplayPort"], sub_note:"");
$asus_prime_b760_d5 ->popup = '
<div class="modal-header">
        <h5 class="modal-title">ASUS TUF GAMING B760M-PLUS II</h5>
        <button type="button" class="close" data-dismiss="modal">x</button>
    </div>
    <div class="modal-body">
        <img src="../assets/images/MAINBOARD-B760M-PLUS-ll.png" alt="B550M-A" style="width: 100%; max-width: 400px; display: block; margin: 10px auto;">
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <thead>
                <tr style="background-color: #f1f1f1;">
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Tính năng</th>
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Mô tả</th>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Chipset</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">B760</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Socket</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">1700</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kích thước </b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Micro-ATX</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Khe RAM tối đa</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">3 khe</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kiểu RAM hỗ trợ</b></td>
                     <td style="padding: 10px; border: 1px solid #ddd;">DDR5</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Hỗ trợ bộ nhớ tối đa</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">192GB</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Bus RAM hỗ trợ</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                         (OC)/7000(OC)/6800(OC)/6600(OC)/6400(OC)/6200(OC)/
                          6000(OC)/5800(OC)/5600/5400/5200/5000/4800 MHz
                    </td>

                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Lưu trữ </b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                       <br> 
                           1 x M.2 2280 PCIe 4.0 x2,  4 x cổng SATA 6Gb/s
                       </br>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kiểu khe M.2 hỗ trợ *</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;"> PCIe 4.0 x4 và PCIe 4.0 x2</td>
                </tr>
                 <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Cổng xuất hình</b></td>
                     <td style="padding: 10px; border: 1px solid #ddd;">
                       1 x HDMI ,  1 x DisplayPort
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Khe PCI</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                        1 x PCIe 5.0 x16,  1 x PCIe 4.0 x4 ,  1 x PCIe 4.0 x1 
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Số cổng USB</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                    <br>-  1 x USB Type-C(Tối đa 2)</br>
                    <br>-  1 x USB 10Gbps</br>
                    <br>-  2 x USB 5Gbps</br>
                    <br>-  4 x USB 2.0(Tối đa 7)</br>
                    </td>
                </tr>
               
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kết nối không dây</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Wi-Fi 6E</td>
                </tr>
                
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Âm thanh</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Realtek 7.1 Surround Sound High Definition Audio CODEC</td>
                </tr>
                
            </tbody>
        </table>
         <br></br>
            <a href="https://www.asus.com/motherboards-components/motherboards/tuf-gaming/tuf-gaming-b760m-plus-ii/" target="_blank">Xem thêm ></a>
        </div>
';

$asus_prime_b760_wifi_d5 = new Product(name:"ASUS PRIME B760M-A WIFI", type:"main", price: 3628 , note:["port" => "2 x USB 3.2, 4 x USB 2.0, 3 x Audio jacks, 1 x PS/2 Keyboard/Mouse combo port, 1 x LAN 2.5Gb/s Ethernet, 1 x Wi-Fi Module",
                                                                                     "display" => "2 x HDMI, 1 x DisplayPort"], sub_note:"");
$asus_prime_b760_wifi_d5 -> popup ='
<div class="modal-header">
        <h5 class="modal-title">ASUS PRIME B760M-A WIFI</h5>
        <button type="button" class="close" data-dismiss="modal">x</button>
    </div>
    <div class="modal-body">
        <img src="../assets/images/MAINBOARD-PRIME-B760M-AWIFI.png" alt="B550M-A" style="width: 100%; max-width: 400px; display: block; margin: 10px auto;">
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <thead>
                <tr style="background-color: #f1f1f1;">
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Tính năng</th>
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Mô tả</th>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Chipset</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Intel B760</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Socket</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">LGA 1700</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kích thước </b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">24.4 cm x 24.4 cm (Micro ATX)</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Khe RAM tối đa</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">4 khe</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kiểu RAM hỗ trợ</b></td>
                     <td style="padding: 10px; border: 1px solid #ddd;">DDR5</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Hỗ trợ bộ nhớ tối đa</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">128 GB</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Bus RAM hỗ trợ</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                        
                        <br>5333(OC)/5066(OC)/5000(OC)/4800(OC)/4600(OC)/4400(OC)/4266(OC)/
                           4000(OC)/3733(OC)/3600( OC)/3466(OC)/3400(OC)/3333(OC)/3200/3000/
                           2933/2800/2666/2400/2133 Non-ECC, Un-buffered Memory
                        </br>
                    </td>

                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Lưu trữ </b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">4 x SATA 3 6Gb/s, 3 x M.2 NVMe</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kiểu khe M.2 hỗ trợ </b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">M.2 SATA/NVMe</td>
                </tr>
                 <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Cổng xuất hình</b></td>
                        <td style="padding: 10px; border: 1px solid #ddd;">
                           1 x DisplayPort, 2 x HDMI
                        </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Khe PCI</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                        1 x PCIe 5.0 x16; 1 x PCIe 4.0 x4 slot; 1 x PCIe 3.0 x1 slot
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Số cổng USB</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                       2 x USB 3.2 Gen 2 Type-A, 4 x USB 2.0 Type-A
                    </td>
                </tr>
                
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>WIFI</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                        Wi-Fi 6 2x2 Wi-Fi 6 (802.11 a/b/g/n/ac/ax)
                    </td>
                </tr>
     
            </tbody>
        </table>
         <br></br>
            <a href="https://www.asus.com/motherboards-components/motherboards/prime/prime-b760m-a-wifi/" target="_blank">Xem thêm ></a>
        </div>
';
                                                                                   
$asus_prime_n100 = new Product(name:"ASUS PRIME N100I-D D4", type:"main", price: 3005, note:["port" => "2 x USB 3.2 Gen 2, 2 x USB 3.2 Gen 1, 2 x USB 2.0, 3 x Audio jacks, 1 x PS/2 Keyboard/Mouse combo port, 1 x LAN 1Gb/s Ethernet",
                                                                                     "display" => "1 x HDMI, 1 x DisplayPort, 1 x VGA, 1 x COM"], sub_note:"");
$asus_prime_n100 ->popup = '
<div class="modal-header">
        <h5 class="modal-title">ASUS PRIME N100I-D D4</h5>
        <button type="button" class="close" data-dismiss="modal">x</button>
    </div>
    <div class="modal-body">
        <img src="../assets/images/MAINBOARD_ASUS PRIME N100I-D D4.png" alt="B550M-A" style="width: 100%; max-width: 400px; display: block; margin: 10px auto;">
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <thead>
                <tr style="background-color: #f1f1f1;">
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Tính năng</th>
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Mô tả</th>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Chipset</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Intel® H610 Chipset</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Socket</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;"> Intel® Socket LGA1700</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kích thước </b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">6.7 inch x 6.7 inch ( 17.02 cm x 17.02 cm )</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Khe RAM tối đa</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">4 khe</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kiểu RAM hỗ trợ</b></td>
                     <td style="padding: 10px; border: 1px solid #ddd;">DDR5</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Hỗ trợ bộ nhớ tối đa</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">128 GB</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Bus RAM hỗ trợ</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                          3200/3000/2933/2800/2666/2400/2133 MHz
                    </td>

                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Lưu trữ </b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                        <br>    -  1 x khe M.2 (Key M), kiểu 2260/2280 (hỗ trợ PCIe 3.0 x4)</br>
                        <br>    -  4 x cổng SATA 6Gb/s</br>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kiểu khe M.2 hỗ trợ </b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">PCIe 3.0 x4</td>
                </tr>
                 <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Cổng xuất hình</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                        1 x DisplayPort 1 x HDMI   1 x D-Sub
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Khe PCI</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">1 x PCIe 4.0 x16</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Số cổng USB</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                     <br> + Mặt sau :</br>
                     <br> -  2 x USB 3.2 Gen 1 (Type-A)</br>
                     <br> -  2 x USB 2.0 (Type-A)</br>
                     <br> + Nội bộ </br>
                     <br> -  1 x USB 3.2 Gen 1 header (hỗ trợ thêm 2 cổng USB 3.2 Gen 1)</br>
                     <br> -  1 x USB 2.0 header (hỗ trợ thêm 2 cổng USB 2.0)</br>
                    </td>
                </tr>
                
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Âm Thanh</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Realtek 7.1 CODEC âm thanh độ nét cao</td>
                </tr>
     
            </tbody>
        </table>
         <br></br>
            <a href="https://www.asus.com/motherboards-components/motherboards/prime/prime-n100i-d-d4/" target="_blank">Xem thêm ></a>
        </div>
';

// ---- RAM ----
$lexar_8g_3200 = new Product(name:"LEXAR 8G 3200MHz DDR4", type:"ram", price: 375, note:"", sub_note:""); // LD4AU008G-B3200GSST
$lexar_16g_3200 = new Product(name:"LEXAR 16G 3200MHz DDR4", type:"ram", price: 725, note:"", sub_note:""); // LD4AU016G-B3200GSST
$kingston_32g_3200 =  new Product(name:"KINGSTON 32G 3200MHz DDR4", type:"ram", price: 1550, note:"", sub_note:""); // KF432C16BB/32

$kingston_8gx2_3200 = new Product(name:"KINGSTON 16G(2x8G) 3200MHz DDR4 RGB", type:"ram", price: 1450, note:"", sub_note:""); // KF432C16BB2AK2/16
$kingston_16gx2_3200 = new Product(name:"KINGSTON 32G(2x16G) 3200MHz DDR4 RGB", type:"ram", price: 2275, note:"", sub_note:""); // KF432C16BB2AK2/32
$gskill_32gx2_3600 = new Product(name:"GSKILLS 64G(2x32G) 3600MHz DDR4 RGB", type:"ram", price: 4275, note:"", sub_note:""); // F4-3600C18D-64GTZN

$kingston_8gx2_5600_d5 = new Product(name:"KINGSTON 16G(2x8G) 5600MHz DDR5 RGB", type:"ram", price: 1900, note:"", sub_note:""); // KF556C40BBAK2-16
$kingston_16gx2_5600_d5 = new Product(name:"KINGSTON 32G(2x16G) 5600MHz DDR5 RGB", type:"ram", price: 3188, note:"", sub_note:""); // KF556C40BBAK2-32

$kingston_8g_5600_d5 = new Product(name:"KINGSTON 8G 5600MHz DDR5", type:"ram", price: 850, note:"", sub_note:""); // KF556C40BB-8
$kingston_16g_5600_d5 = new Product(name:"KINGSTON 16G 5600MHz DDR5", type:"ram", price: 1156, note:"", sub_note:""); // KF556C40BB-16

$lexar_8g_3200_laptop = new Product(name:"LEXAR 8G 3200MHz DDR4", type:"ram", price: 375, note:"", sub_note:""); // LD4AS008G-B3200GSST
$lexar_16g_3200_laptop = new Product(name:"LEXAR 16G 3200MHz DDR4", type:"ram", price: 750, note:"", sub_note:""); // LD4AS016G-B3200GSST

$gskill_16gx2_5600_d5 = new Product(name:"GSKILLS 32G(2x16G) 5600MHz DDR5", type:"ram", price: 2773, note:"", sub_note:""); // F5-5600J4645A16GX2-RS5K
$gskill_16gx2_6400_d5 = new Product(name:"GSKILLS 32G(2x16G) 6400MHz DDR5", type:"ram", price: 3315, note:"", sub_note:""); // F5-6400J3648F16GX2-RM5RK

$kingston_16gx2_5200_d5 = new Product(name:"Kingston 32GB(2x16G)/5200Mhz FURY Beast Black DDR5", type:"ram", price: 0, note:"", sub_note:"");
$kingston_32g_3200_d4 = new Product(name:"Kingston 32GB 3200Hhz DDR4 FURY Beast RGB", type:"ram", price: 0, note:"", sub_note:""); // KF432C16BB2A/32


// ---- SSD ----
$lexar_256g_sata = new Product(name:"LEXAR 256G SATA", type:"ssd", price: 500, note:"", sub_note:""); // LNS100-256RB
$lexar_512g_sata = new Product(name:"LEXAR 512G SATA", type:"ssd", price: 938, note:"", sub_note:""); // LNS100-512RB

$kingston_240g_sata = new Product(name:"KINGSTON 240G SATA", type:"ssd", price: 469, note:"", sub_note:""); // SA400S37/240G
$kingston_480g_sata = new Product(name:"KINGSTON 480G SATA", type:"ssd", price: 838, note:"", sub_note:""); // SA400S37/480G

$lexar_256g_m2 = new Product(name:"LEXAR 256G M.2 NVMe PCIe", type:"ssd", price: 594, note:"", sub_note:""); // LNM620X256G-RNNNG
$lexar_512g_m2 = new Product(name:"LEXAR 512G M.2 NVMe PCIe", type:"ssd", price: 1038, note:"", sub_note:""); // LNM620X512G-RNNNG
$kingston_500g_m2 = new Product(name:"KINGSTON 500G M.2 NVMe PCIe", type:"ssd", price: 1017, note:"", sub_note:""); // SNV3S/500G   SNV2S/500GBK
$kingston_1t_m2 = new Product(name:"KINGSTON 1T M.2 NVMe PCIe", type:"ssd", price: 1719, note:"", sub_note:""); // SNV3S/1000G
$kingston_2t_m2 = new Product(name:"KINGSTON 2T M.2 NVMe PCIe", type:"ssd", price: 3750, note:"", sub_note:""); // SNV3S/2000G

$kingston_512g_m2 = new Product(name:"KINGSTON 512G M.2 NVMe PCIe", type:"ssd", price: 0, note:"", sub_note:""); // SKC3000S/512G


$lexar_1t_m2 = new Product(name:"LEXAR 1T M.2 NVMe PCIe", type:"ssd", price: 1849, note:"", sub_note:""); // LNM620X001T-RNNNG
$lexar_2t_m2 = new Product(name:"LEXAR 2T M.2 NVMe PCIe", type:"ssd", price: 4590, note:"", sub_note:""); // LNM790X002T-RNNNG

// ---- PSU ----
$rosa_450w = new Product(name:"ROSA ATX650 (450W)", type:"psu", price: 250, note:"", sub_note:""); 
$coolerplus_550w = new Product(name:"550W", type:"psu", price: 250, note:"", sub_note:""); 
$inwin_450w = new Product(name:"450W", type:"psu", price:0, note:"", sub_note:"");  // nguồn đi kèm theo case InWin
$mik_600w = new Product(name:"MIK SPOWER 600 (600W)", type:"psu", price:756, note:"", sub_note:"");
$asus_850w = new Product(name:"ASUS TUF GAMING-850G (850W)", type:"psu", price: 4125, note:"", sub_note:"");
$jetek_750w = new Product(name:"JETEK J750(750W)", type:"psu", price: 0, note:"", sub_note:"");
$jetek_550w = new Product(name:"JETEK MAXWATT550 V2 (550W)", type:"psu", price: 0, note:"", sub_note:"");


// ---- CASE ----
$rosa_r101 = new Product(name:"ROSA R101 MATX", type:"case", price: 150, note:["port" => "2 x USB 2.0, 1 x SD port, 1 x microphone jack, 1 x headphone jack"], sub_note:""); 
$rosa_r101 -> popup = '
<div class="modal-header">
        <h5 class="modal-title">ROSA R101 MATX</h5>
        <button type="button" class="close" data-dismiss="modal">x</button>
    </div>
    <div class="modal-body">
        
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <img src="../assets/images/case_r101_right.jpg" alt="B550M-A" style="width: 100%; max-width: 400px; display: block; margin: 10px auto;">

            <thead>
                <tr style="background-color: #f1f1f1;">
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Tính năng</th>
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Mô tả</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Hỗ trợ mainboard</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Micro-ATX</td>
                </tr>
            
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Hỗ trợ ổ cứng tối đa </b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">3 x 3.5 inch, 1 x 2.5 inch hoặc có thể lắp 1 x 3.5 inch, 3 x 2.5 inch.</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Số lượng quạt kèm theo </b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">2 quạt</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Công giao tiếp mặt trước </b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                       <br> 1 x Jack Micro </br>
                       <br> 1 x Jack tai nghe </br>
                       <br> 2 x USB 3.0 </br>
                       <br> 2 x USB 2.0 </br>
                    
                    </td>
                </tr>
            </tbody>
        </table>
    </div>      
';

$rosa_r102 = new Product(name:"ROSA R102 MATX", type:"case", price: 263, note:["port" => "2 x USB 2.0, 1 x HD Audio"], sub_note:"");
$rosa_r102-> popup = '
    <div class="modal-header">
        <h5 class="modal-title">ROSA R102 MATX</h5>
        <button type="button" class="close" data-dismiss="modal">x</button>
    </div>
    <div class="modal-body">
        
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <img src="../assets/images/office1.jpg" alt="ROSA R102 MATX" style="width: 100%; max-width: 400px; display: block; margin: 10px auto;">

            <thead>
                <tr style="background-color: #f1f1f1;">
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Tính năng</th>
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Mô tả</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Độ dầy</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;"> 0.8mm</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kiểu dáng</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">M-ATX</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Màu sắc:</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Đen</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Mặt trước</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Plastic</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Cổng kết nối</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">1* USB 3.0 + 2* USB 2.0 + HD Audio</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Hỗ trợ</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">3.5” HDD*2; 2.5” SSD*2</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Tản nhiệt</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">CPU 135mm; VGA 260mm</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kích thước case</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">	293*160*352 mm</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kích thước vỏ thùng:</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">395*200*340 mm</td>
                </tr>
                
            </tbody>
        </table>
    </div>      
';

$inwin_efs063 = new Product(name:"InWin EFS063 MATX", type:"case", price: 1728, note:["port" => "2 x USB 3.0, 2 x USB 2.0, 1 x microphone jack, 1 x headphone jack"], sub_note:""); 
$inwin_efs063 -> popup ='
    <div class="modal-header">
        <h5 class="modal-title">InWin EFS063 MATX</h5>
        <button type="button" class="close" data-dismiss="modal">x</button>
    </div>
    <div class="modal-body">
        
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <img src="../assets/images/case_inwin_right.jpg" alt="InWin EFS063 MATX" style="width: 100%; max-width: 400px; display: block; margin: 10px auto;">

            <thead>
                <tr style="background-color: #f1f1f1;">
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Tính năng</th>
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Mô tả</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;">Công giao tiếp mặt trước<b></b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                        <br> 2 x USB 3.0 </br>
                        <br> 2 x USB 2.0 </br>
                        <br> 1 x microphone jack </br>
                        <br> 1 x headphone jack </br>
                    
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;">Hỗ trợ ổ cứng tối đa<b></b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                        3 x 3.5 inch, 1 x 2.5 inch hoặc có thể lắp 1 x 3.5 inch, 3 x 2.5 inch
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;">Số lượng quạt kèm theo <b></b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">2 quạt</td>
                </tr>
            
            </tbody>
        </table>
    </div>      
';

$inwin_pe052 = new Product(name:"InWin PE052 ATX", type:"case", price: 0, note:["port" => "2 x USB 2.0"], sub_note:""); 
$inwin_pe052 -> popup ='
  <div class="modal-header">
        <h5 class="modal-title">InWin EFS063 MATX</h5>
        <button type="button" class="close" data-dismiss="modal">x</button>
    </div>
    <div class="modal-body">
        
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <img src="../assets/images/SERVER-2-front..jpg" alt="InWin EFS063 MATX" style="width: 100%; max-width: 400px; display: block; margin: 10px auto;">

            <thead>
                <tr style="background-color: #f1f1f1;">
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Tính năng</th>
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Mô tả</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;">Công suất tối đa	<b></b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                        <br>Chiều dài GPU: 290mm</br>
                        <br> Chiều cao tản nhiệt CPU: 150mm </br>
                        <br> 1 x microphone jack </br>
                        <br> Chiều dài nguồn PS2: 200mm (bao gồm cả khu vực quản lý cáp) </br>
                    
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;">Các chỉ số	<b></b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                        Trạng thái nguồn, HDD, LAN, đèn LED hoạt động lỗi hệ thống, ID
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;">Khe cắm mở rộng	<b></b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Khe cắm PCIe toàn chiều cao x 7</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;">Vật liệu<b></b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                       <br> Chất liệu: SECC </br>
                       <br> Độ dày: 0.6~0.8mm</br>
                    </td>
                </tr>
            
            </tbody>
        </table>
    </div>      
';

$morax_3fa = new Product(name:"MORAX 3FA MATX", type:"case", price: 750, note:["port" => "1 x USB 3.0, 2 x USB 2.0, 1 x microphone jack, 1 x headphone jack"], sub_note:"");
$morax_3fa -> popup = '  
    <div class="modal-header">
        <h5 class="modal-title">MORAX 3FA MATX</h5>
        <button type="button" class="close" data-dismiss="modal">x</button>
    </div>
    <div class="modal-body">
        
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <img src="../assets/images/Morax_x3d.jpg" alt="MORAX 3FA MATX" style="width: 100%; max-width: 400px; display: block; margin: 10px auto;">

            <thead>
                <tr style="background-color: #f1f1f1;">
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Tính năng</th>
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Mô tả</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Hỗ trợ mainboard:</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Micro-ATX ITX</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Cổng giao tiếp mặt trước:</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                       <br> 1 x Jack Micro </br>
                       <br> 1 x Jack tai nghe </br>
                       <br> 2 x USB 2.0 </br>
                       <br> 1 x USB 3.0 </br>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Chất liệu:</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Khung kim loại</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Hỗ trợ ổ cứng tối đa:</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">2 x SSD 2.5 inch ,2 x HDD 3.5 inch</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Số lượng quạt kèm theo:</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">3 quạt</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Đèn LED:</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;"> Có</td>
                </tr>
                  <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Hỗ trợ tản nhiệt nước</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Kích thước tối đa 175 mm</td>
                </tr>
            </tbody>
        </table>
    </div>      
';

$coolerplus_cpcc09 = new Product(name:"ROSA CPC-C09 MATX", type:"case", price: 173, note:["port" => "2 x USB 2.0, 1 x HD Audio"], sub_note:"");
$coolerplus_cpcc09 -> popup = '
    <div class="modal-header">
        <h5 class="modal-title">ROSA CPC-C09 MATX</h5>
        <button type="button" class="close" data-dismiss="modal">x</button>
    </div>
    <div class="modal-body">
        
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <img src="../assets/images/case_cpc_right_.jpg" alt="ROSA CPC-C09 MATX" style="width: 100%; max-width: 400px; display: block; margin: 10px auto;">

            <thead>
                <tr style="background-color: #f1f1f1;">
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Tính năng</th>
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Mô tả</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Độ dầy</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;"> 0.8mm</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kiểu dáng</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">M-ATX</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Màu sắc:</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Đen</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Mặt trước</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Plastic</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Cổng kết nối</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">1* USB 3.0 + 2* USB 2.0 + HD Audio</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Hỗ trợ</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">3.5” HDD*2; 2.5” SSD*2</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Tản nhiệt</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">CPU 135mm; VGA 260mm</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kích thước case</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">	293*160*352 mm</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kích thước vỏ thùng:</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">395*200*340 mm</td>
                </tr>
                
            </tbody>
        </table>
    </div>      
';

$coolermaster_cmp510 = new Product(name:"ROSA CMP-510", type:"case", price: 2063, note:["port" => "1 x USB 3.2 , 1 x USB 2.0, 1 x HD Audio"], sub_note:"");
$coolermaster_cmp510 -> popup = '
    <div class="modal-header">
        <h5 class="modal-title">ROSA CMP-510</h5>
        <button type="button" class="close" data-dismiss="modal">x</button>
    </div>
    <div class="modal-body">
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <img src="../assets/images/CASE_gamer_1.jpg" alt="ROSA CMP-510" style="width: 100%; max-width: 400px; display: block; margin: 10px auto;">

            <thead>
                <tr style="background-color: #f1f1f1;">
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Tính năng</th>
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Mô tả</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Chất Liệu </b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Thép, nhựa, kính cường lực.</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Kích Thước </b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                        445 x 204 x 463mm (bao gồm phần nhô ra)
                        436 x 204 x 448mm (không bao gồm phần nhô ra)
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Màu sắc </b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Đen</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Volume</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">	39.85L (exlc. Protrusions)</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Trọng lượng</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">11.3 kg</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Hỗ trợ mainboard</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Mini ITX, Micro ATX, ATX.</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Khe mở rộng</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">	7</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>5.25" khoang ổ cứng</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">N/A</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>2.5" / 3.5" khoang ổ cứng (combo)</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">2</td>
                </tr>
                 <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>2,5" khoang ổ cứng</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">2</td>
                </tr>
                
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Cổng I / O</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                       1 x USB 3.2 ,1 x USB 2.0 ,1 x HD Audio
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Bộ điều khiển ARGB</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">ARGB HUB</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Quạt được cài đặt sẵn</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                        Trước: Quạt  ARGB 3 x 120mm (CP510-KGNN-S00)
                        Sau: N/A
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Quạt hỗ trợ</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">	
                        <br>    Trên: 2 x 120mm, 2 x 140mm</br>
                        <br>    Trước: 3 x 120mm, 2 x 140mm</br>
                        <br>    Sau: 1 x 120mm</br>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Két nước hỗ trợ </b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                        <br>	Trên: 120 / 240mm (Giới hạn chiều cao thanh bộ nhớ 35mm, Đầu tiên hãy lắp ráp bộ nhớ và sau đó lắp ráp Bộ tản nhiệt) </br>
                        <br>    Trước: 120mm, 140mm, 240mm, 280mm </br>
                        <br>    Sau: 120mm </br>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Chiều cao - tản nhiệt khí CPU</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">161mm</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Chiều dài - PSU nguồn náy tính</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">160mm</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Hỗ trợ GFX</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">350mm (có quạt và bộ tản nhiệt phía trước)</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Bộ lọc bụi</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Trên cùng, dưới cùng</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Nguồn máy tính hỗ trợ</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">	Dưới cùng, ATX</td>
                </tr>
            </tbody>
        </table>
     
    </div>      
';

// ---- COOLER ----
$hyper_air = new Product(name:"HYPER 212 SPECTRUM V3 ARGB", type:"cooler", price: 475, note:"", sub_note:""); 
$asus_lc360 = new Product(name:"Prime LC 360 ARGB", type:"cooler", price: 3275, note:"", sub_note:""); 

// ---- Keyboard Mouse ----
$no_key_mouse = new Product(name:"Không kèm Phím & Chuột", type:"key_mouse", price:0, note:"", sub_note:"");
$rosa_key_mouse = new Product(name:"ROSA V100 Phím & Chuột", type:"key_mouse", price: 188, note:"", sub_note:"");
$rosa_key_mouse -> popup ='
<div class="modal-container" style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: flex-start;">
    <div class="modal-item" style="width: 48%; box-sizing: border-box;">
        <div class="modal-header">
            <h5 class="modal-title">BÀN PHÍM ROSA V100</h5>
        </div>
        <div class="modal-body">
            <img src="../assets/images/PHIMROSA_V100.jpg" alt="BÀN PHÍM ROSA V100" style="width: 100%; display: block; margin: 10px auto;">
            <p class="mb-4" style="color: #000;">
                Bàn phím ROSA V100 sở hữu thiết kế đơn giản, bền bỉ với chất liệu cao cấp, mang lại trải nghiệm gõ phím êm ái và chính xác. 
                Sản phẩm phù hợp cho cả làm việc và giải trí, đáp ứng tốt nhu cầu sử dụng hàng ngày.       
            </p>
        </div>
    </div>

    <div class="modal-item" style="width: 48%; box-sizing: border-box;">
        <div class="modal-header">
            <h5 class="modal-title">CHUỘT ROSA V100</h5>
        </div>
        <div class="modal-body">
            <img src="../assets/images/CHUOT-ROSA-V100.jpg" alt="CHUỘT ROSA V100" style="width: 100%; display: block; margin: 10px auto;">
            <p class="mb-4" style="color: #000;">
                Chuột ROSA V100 được thiết kế đơn giản nhưng tinh tế, mang lại cảm giác cầm nắm thoải mái và dễ dàng sử dụng. 
                Với độ nhạy DPI tùy chỉnh, sản phẩm đáp ứng tốt các nhu cầu làm việc và giải trí hàng ngày.        
            </p>
        </div>
    </div>
</div>

';

$coolerplus_key_mouse = new Product(name:"Coolerplus Phím Cơ HERO G88 & Chuột Gaming G63", type:"key_mouse", price: 963, note:"", sub_note:"");
$coolerplus_key_mouse -> popup ='
    <div class="modal-header">
        <h5 class="modal-title">Phím Cơ HERO G88</h5>
        <button type="button" class="close" data-dismiss="modal">x</button>
    </div>
    <div class="modal-body">
        <img src="../assets/images/PHIMCHUOT-HERO-G88.JPG" alt="Ryzen 3 Pro 4350G" style="width: 100%; max-width: 400px; display: block; margin: 10px auto;">
        <p class="mb-4" style="color: #000">
            Phím cơ HERO G88 là mẫu bàn phím cơ nổi bật với thiết kế hiện đại, switch bền bỉ, và hiệu suất tối ưu cho game thủ lẫn dân văn phòng. 
            Sản phẩm được trang bị đèn LED RGB sống động và khả năng chống nước, mang lại trải nghiệm gõ phím ấn tượng và bền lâu.
        </p>
        <br><br>
    </div>
    <div class="modal-header">
        <h5 class="modal-title">CHUỘT GAMING G63</h5>
    </div>
    <div class="modal-body">
        <img src="../assets/images/PHIMCHUOT-GAMING-G63.JPG" alt="Ryzen 3 Pro 4350G" style="width: 100%; max-width: 400px; display: block; margin: 10px auto;">
        <p class="mb-4" style="color: #000">
            Phím chuột GAMING G63 là bộ đôi hoàn hảo dành cho game thủ, với thiết kế mạnh mẽ, đèn LED RGB nổi bật, và hiệu suất tối ưu. 
            Chuột hỗ trợ độ nhạy DPI cao, phím bấm nhanh nhạy, mang đến trải nghiệm chơi game mượt mà và chính xác.        
        </p>
        <br><br>
    </div>
';

// ---- OS ----
$win11_pro = new Product(name:"Windows 11 Pro", type:"os", price: 1000, note:"", sub_note:""); // AN
$win11_pro -> popup='
<div class="modal-header">
        <h5 class="modal-title">Tính năng nổi bật của Windows 11 Pro</h5>
        <button type="button" class="close" data-dismiss="modal">x</button>
    </div>
    <div class="modal-body">
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <thead>
                <tr style="background-color: #f1f1f1;">
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Tính năng</th>
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Mô tả</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Bảo mật nâng cao</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Tích hợp BitLocker, bảo vệ dữ liệu an toàn.</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Quản lý thiết bị từ xa</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Hỗ trợ Azure Active Directory và Group Policy.</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Ảo hóa</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Cung cấp Hyper-V và Windows Sandbox cho môi trường thử nghiệm.</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Tối ưu đa nhiệm</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Snap Layouts, Snap Groups giúp sắp xếp cửa sổ dễ dàng.</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Tích hợp Microsoft Teams</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Kết nối nhanh chóng và tiện lợi cho công việc.</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Windows Copilot</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Trợ lý AI tích hợp hỗ trợ tìm kiếm, quản lý và tăng hiệu suất làm việc.</td>
                </tr>
            </tbody>
        </table>
        <br><br>
    </div>
';

$win11_home = new Product(name:"Windows 11 Home", type:"os", price: 0, note:"", sub_note:""); 


$free_dos = new Product(name:"Free DOS", type:"os", price: 0, note:"", sub_note:""); 

$win11pro_solution = new Product(name:"WINDOWS 11 PRO + AI SOLUTIONS", type:"os", price: 0, note:"", sub_note:""); 
// $win11pro_solution -> popup ='
//     <div class="modal-container">
//     <div class="modal-item">
//          <div class="modal-header">
//             <h5 class="modal-title">Giải Pháp AI cho Doanh Nghiệp</h5>
//         </div>
//         <div class="modal-header">
//             <h5 class="modal-title">Trợ Lý Ảo AI</h5>
//         </div>
//         <div class="modal-body">
//             <p class="mb-2" style="color: #000;">
//               Hệ thống được tối ưu để mang lại sự cân bằng giữa sức mạnh xử lý, khả năng mở rộng và tính ổn định lâu dài, giúp doanh nghiệp vận hành trơn tru mà không lo gián đoạn     
//             </p>
//             <a href="https://rosacomputer.vn/sanpham/ROSA-OFFICE-ZERO.php" target="_blank">Xem thêm ></a>
//         </div>
//     </div>

//     <div class="modal-item" ">
//         <div class="modal-header">
//             <h5 class="modal-title">Chấm Công Camera AI</h5>
//         </div>
//         <div class="modal-body">
//             <p class="mb-4" style="color: #000;">
//             Hệ thống Chatbot AI giúp doanh nghiệp tra cứu thông tin nội bộ, soản thảo văn bản 
//             </p>
//             <a href="https://rosacomputer.vn/sanpham/ROSA-GAMER-1.php" target="_blank">Xem thêm ></a>
//         </div>
//     </div>
//      <div class="modal-item" ">
//         <div class="modal-header">
//             <h5 class="modal-title">Nextcloud</h5>
//         </div>
//         <div class="modal-body">
//             <p class="mb-4" style="color: #000;">
//                 Hệ thống được tối ưu để mang lại sự cân bằng giữa sức mạnh xử lý, khả năng mở rộng và tính ổn định lâu dài, giúp doanh nghiệp vận hành trơn tru mà không lo gián đoạn        
//             </p>
//             <a href="https://vn.aoc.com/product/22B30HM23-74" target="_blank">Xem thêm ></a>
//         </div>
//     </div>
// </div>
    
// ';

// ---- LCD ----
$no_monitor = new Product (name:"Không màn hình", type:"monitor", price:0, note:"", sub_note:"", img_path:"", display:False); // nếu được chọn là sẽ không hiển thị trên bill
$aoc_21 = new Product(name:"AOC 22” (22B30HM23/74)<br>Phẳng - FHD - VA - 120Hz - 1ms - 1xDsub - 1x HDMI ", type:"monitor", price: 1838, note:"", sub_note:"", img_path:"../assets/images/aoc22.png");  // AN
$aoc_21 -> popup ='
        <div class="modal-header">
            <h5 class="modal-title">22B30HM23/74</h5>
            <button type="button" class="close" data-dismiss="modal">x</button>
        </div>
        <div class="modal-body">
             
             <h5>21.5" VA Panel Monitor</h5>
            <img src="../assets/images/aoc22.png" alt="AOC 22" style="width: 100%; max-width: 400px; display: block; margin: 10px auto;">

            <p class="mb-4" style="color: #000">
                Sắc nét, siêu mỏng, mượt mà ! VA góc nhìn rộng, công nghệ khử nhấp nháy, chế độ ánh sáng xanh, FULL HD, không viền 3 cạnh. 22B30HM23 là màn hình có tính năng đồng bộ hóa thích ứng, Công nghệ chống xé hình, tần số quét 120Hz và thời gian phản hồi MPRT            </p>
            <br><br>
            <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
           
            <tbody>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Độ phân giải tối ưu</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">1920 × 1080 (FHD)</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Tốc độ phản hồi</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">1ms</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Tấm nền</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">21.5” / VA.</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Low Blue Mode</b></td>
                     <td style="padding: 10px; border: 1px solid #ddd;">Sẽ giúp bảo vệ mắt người dùng khi giảm ánh sáng xanh có bước sóng ngắn. Ánh sáng xanh có bước sóng ngắn là tác nhân chính dẫn đến mỏi mắt, đau mắt khi sử dụng màn hình.</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>AdaptiveSync</b></td>
                     <td style="padding: 10px; border: 1px solid #ddd;">Công nghệ Adaptive Sync loại bỏ vấn đề bằng cách đảm bảo tốc độ làm mới màn hình của bạn luôn được đồng bộ hóa với bộ xử lý.</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>3-Sided Frameless</b></td>
                     <td style="padding: 10px; border: 1px solid #ddd;">Với thiết kế màn hình 3 cạnh tràn viền, người dùng sẽ sở hữu một không gian rộng lớn để thỏa sức giải trí, sáng tạo và làm việc.</td>
                </tr>
            </tbody>
        </table>
        <br></br>
            <a href="https://vn.aoc.com/product/22B30HM23-74" target="_blank">Xem thêm ></a>
        </div>
        
    ';

$aoc_24 = new Product(name:"AOC 24” (24B20JH2/74)<br>Phẳng - FHD - IPS - 100Hz - 1xDsub - 1x HDMI", type:"monitor", price: 2288, note:"", sub_note:"", img_path:"../assets/images/aoc24.png");    // AN
$aoc_24 -> popup ='
<div class="modal-header">
            <h5 class="modal-title">24B20JH2/74</h5>
            <button type="button" class="close" data-dismiss="modal">x</button>
        </div>
        <div class="modal-body">
             
             <h5>23.8" IPS Panel Monitor</h5>
            <img src="../assets/images/aoc24.png" alt="AOC 24" style="width: 100%; max-width: 400px; display: block; margin: 10px auto;">

            <p class="mb-4" style="color: #000">
                Hiệu quả mượt mà, AOC 24B20JH2 là màn hình Full HD với góc nhìn rộng IPS, tần số quét 100Hz. Là sự lựa chọn tối ưu để khung hình không bị giật lắc,            <br><br>
            <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
           
            <tbody>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Độ phân giải tối ưu</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">1920 × 1080 (FHD)</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Tốc độ phản hồi</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">1ms</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Tấm nền</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">IPS</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>Tối ưu đa nhiệm</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">100Hz</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>3-Sided Frameless</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Với thiết kế màn hình 3 cạnh tràn viền, người dùng sẽ sở hữu một không gian rộng lớn để thỏa sức giải trí, sáng tạo và làm việc.</td>

                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><b>AdaptiveSync</b></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Công nghệ Adaptive Sync loại bỏ vấn đề bằng cách đảm bảo tốc độ làm mới màn hình của bạn luôn được đồng bộ hóa với bộ xử lý.</td>

                </tr>
            </tbody>
        </table>
        <br></br>
            <a href="https://vn.aoc.com/product/24B20JH2-74" target="_blank">Xem thêm ></a>
        </div>
        
    ';


// ---- Voucher ----
$voucher_400k = new Product (name:"Voucher GOT IT trị giá 300K!", type:"voucher", price:0, note:"", sub_note:"", img_path:"../assets/images/gotit.jpg");
$voucher = new Product (name:"Voucher GOT IT trị giá 300K!", type:"voucher", price:0, note:"", sub_note:"", img_path:"../assets/images/gotit.jpg");

// ---- Chi Phí Khác ----
$others = new Product(name:"Chi Phí Khác", type:"others", price: 63, note:"", sub_note:""); // Phí lắp ráp


// ---- Chu Hinh ----


?>