<?php

 $DataList= '[
              {"goodsId":"鲜花","img":"./imgs/l1.png","describe":"鲜花玫瑰-经典 19支","price":"200"},
               {"goodsId":"小经典","img":"./imgs/l2.png","describe":"经典 11支 80cm长形","price":"288"},
               {"goodsId":"123322","img":"./imgs/l3.png","describe":"鲜花玫瑰 - 经典永续系列","price":"3765"},
               {"goodsId":"玫瑰","img":"./imgs/l4.png","describe":"小经典 19支 40cm长形","price":"300"},
               {"goodsId":"3456","img":"./imgs/l5.png","describe":"玫瑰 - 经典永续系列","price":"300"},
               {"goodsId":"992348","img":"./imgs/l6.png","describe":"鲜花玫瑰 - 爱在满怀系列 ","price":"400"},
               {"goodsId":"123131","img":"./imgs/l7.png","describe":"鲜花玫瑰 - 爱在满怀系列 ","price":"600"},
               {"goodsId":"3424221299","img":"./imgs/l8.png","describe":"鲜花玫瑰 - 爱在满怀系列 ","price":"500"},
               {"goodsId":"djhsjkfh111","img":"./imgs/l9.png","describe":"鲜花玫瑰 - 爱在满怀系列","price":"600"},
               {"goodsId":"57839391sddd","img":"./imgs/l3.png","describe":"鲜花玫瑰 - 爱在满怀系列","price":"788"},
               {"goodsId":"fsffdjh2243","img":"./imgs/l1.png","describe":"鲜花玫瑰 - 爱在满怀系列","price":"688"},
               {"goodsId":"dhfsjkh09876","img":"./imgs/l2.png","describe":"鲜花玫瑰 - 爱在满怀系列","price":"288"}
            ]';
   
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  echo $DataList;
} elseif ($_SERVER["REQUEST_METHOD"] == "POST"){
  echo $DataList;
}
