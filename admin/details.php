<?php
   include("controller.php");
    $c= new reqres();
   
    $c->user_insert();
?>
<html>
    <head>
        <title>
            insert new model
        </title>
    </head>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <caption><h1 align="center">Add New Car</h1></caption>
            <table align="center" bgcolor="grey">
                <tR>
                    <td>2. cid</td>
                    <td><input type="text"  size="30" name="a2"></td>
                </tR>
                
                
                <tR>
                    <td>3. make</td>
                    <td><input type="text" size="30" name="a3"></td>
                </tR>
                
                
                <tR>
                    <td>4.model </td>
                    <td><input type="text" size="30" name="a4"></td>
                </tR>
                
                
                <tR>
                    <td>5. variant</td>
                    <td><input type="text" size="30" name="a5"></td>
                </tR>
                
                
                <tR>
                    <td>6.img </td>
                    <td><input type="file" size="30" name="a6"></td>
                </tR>
                
                
                <tR>
                    <td>7. price</td>
                    <td><input type="text" size"30" name="a7"></td>
                </tR>
                       
                
                 <tR>
                    <td>8. engine type</td>
                    <td><input type="text"  size="30" name="a8"></td>
                </tR>
                
                
                <tR>
                    <td>9.engine description</td>
                    <td><input type="text"  size="30" name="a9"></td>
                </tR>
                
                
                <tR>
                    <td>10. engine displacement</td>
                    <td><input type="text"  size="30" name="a10"></td>
                </tR>
                
                
                <tR>
                    <td>11. no of cylinders</td>
                    <td><input type="text"  size="30" name="a11"></td>
                </tR>
                
                  
                
                 <tR>
                    <td>12. maximum power</td>
                    <td><input type="text"  size="30" name="a12"></td>
                </tR>
                 
                
                 <tR>
                    <td>13. maximum torque</td>
                    <td><input type="text"  size="30" name="a13"></td>
                </tR>
                 
                
                 <tR>
                    <td>14. valves per cylinder</td>
                    <td><input type="text"  size="30" name="a14"></td>
                </tR>
                 
                
                 <tR>
                    <td>15. valve configuration</td>
                    <td><input type="text"  size="30" name="a15"></td>
                </tR>
                 
                
                 <tR>
                    <td>16. fuel supply system</td>
                    <td><input type="text"  size="30" name="a16"></td>
                </tR>
                 
                
                 <tR>
                    <td>17. borex stroke</td>
                    <td><input type="text"  size="30" name="a17"></td>
                </tR>
                 
                
                 <tR>
                    <td>18. compression ratio</td>
                    <td><input type="text"  size="30" name="a18"></td>
                </tR>
                 
                
                 <tR>
                    <td>19. turbo charger</td>
                    <td><input type="text"  size="30" name="a19"></td>
                </tR>
                 
                
                 <tR>
                    <td>20. super charger</td>
                    <td><input type="text"  size="30" name="a20"></td>
                </tR>
                 
                
                 <tR>
                    <td>21. transmission type</td>
                    <td><input type="text"  size="30" name="a21"></td>
                </tR>
                 
                
                 <tR>
                    <td>22. gear box</td>
                    <td><input type="text"  size="30" name="a22"></td>
                </tR>
                 
                
                 <tR>
                    <td>23. drive type</td>
                    <td><input type="text"  size="30" name="a23"></td>
                </tR>
                 
                
                 <tR>
                    <td>24. over drive</td>
                    <td><input type="text"  size="30" name="a24"></td>
                </tR>
                 
                
                 <tR>
                    <td>25. synchronisers</td>
                    <td><input type="text"  size="30" name="a25"></td>
                </tR>
                 
                
                 <tR>
                    <td>26. clutch type</td>
                    <td><input type="text"  size="30" name="a26"></td>
                </tR>
                 
                
                 <tR>
                    <td>27. front suspension</td>
                    <td><input type="text"  size="30" name="a27"></td>
                </tR>
                 
                
                 <tR>
                    <td>28. rear suspension</td>
                    <td><input type="text"  size="30" name="a28"></td>
                </tR>
                 
                
                 <tR>
                    <td>29. shock absorbers type</td>
                    <td><input type="text"  size="30" name="a29"></td>
                </tR>
                 
                
                 <tR>
                    <td>30. steering type</td>
                    <td><input type="text"  size="30" name="a30"></td>
                </tR>
                 
                
                 <tR>
                    <td>31. steering column</td>
                    <td><input type="text"  size="30" name="a31"></td>
                </tR>
                 
                
                 <tR>
                    <td>32. steering gear type</td>
                    <td><input type="text"  size="30" name="a32"></td>
                </tR>
                 
                
                 <tR>
                    <td>33. turning radius</td>
                    <td><input type="text"  size="30" name="a33"></td>
                </tR>
                 
                
                 <tR>
                    <td>34. front brake type</td>
                    <td><input type="text"  size="30" name="a34"></td>
                </tR>
                 
                
                 <tR>
                    <td>35. rear brake type</td>
                    <td><input type="text"  size="30" name="a35"></td>
                </tR>
                 
                
                 <tR>
                    <td>36. top speed</td>
                    <td><input type="text"  size="30" name="a36"></td>
                </tR>
                 
                
                 <tR>
                    <td>37. acceleration(0-100kmpl)</td>
                    <td><input type="text"  size="30" name="a37"></td>
                </tR>
                 
                
                 <tR>
                    <td>38. drag coefficient</td>
                    <td><input type="text"  size="30" name="a38"></td>
                </tR>
                 
                
                 <tR>
                    <td>39. braking time</td>
                    <td><input type="text"  size="30" name="a39"></td>
                </tR>
                 
                
                 <tR>
                    <td>40. mileage city</td>
                    <td><input type="text"  size="30" name="a40"></td>
                </tR>
                 
                
                 <tR>
                    <td>41. mileage highway</td>
                    <td><input type="text"  size="30" name="a41"></td>
                </tR>
                 
                
                 <tR>
                    <td>42. fuel type</td>
                    <td><input type="text"  size="30" name="a42"></td>
                </tR>
                 
                
                 <tR>
                    <td>43. fuel tank capasity(litres)</td>
                    <td><input type="text"  size="30" name="a43"></td>
                </tR>
                 
                
                 <tR>
                    <td>44. emission control system</td>
                    <td><input type="text"  size="30" name="a44"></td>
                </tR>
                 
                
                 <tR>
                    <td>45. tyre size</td>
                    <td><input type="text"  size="30" name="a45"></td>
                </tR>
                 
                
                 <tR>
                    <td>46. tyre type</td>
                    <td><input type="text"  size="30" name="a46"></td>
                </tR>
                 
                
                 <tR>
                    <td>47. wheel size</td>
                    <td><input type="text"  size="30" name="a47"></td>
                </tR>
                 
                
                 <tR>
                    <td>48. alloy wheel size</td>
                    <td><input type="text"  size="30" name="a48"></td>
                </tR>
                 
                
                 <tR>
                    <td>49. seating capasity</td>
                    <td><input type="text"  size="30" name="a49"></td>
                </tR>
                
                 
                
                 <tR>
                    <td>50. no of doors</td>
                    <td><input type="text"  size="30" name="a50"></td>
                </tR>
                
                  
                 
                
                 <tR>
                    <td>51. no of floors</td>
                    <td><input type="text"  size="30" name="a51"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>52. cargo volume</td>
                    <td><input type="text"  size="30" name="a52"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>53. country of assembly</td>
                    <td><input type="text"  size="30" name="a53"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>54. country of manufacture</td>
                    <td><input type="text"  size="30" name="a54"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>55. discountination date</td>
                    <td><input type="text"  size="30" name="a55"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>56. introduction date</td>
                    <td><input type="text"  size="30" name="a56"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>57. warranty time</td>
                    <td><input type="text"  size="30" name="a57"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>58. warranty distance</td>
                    <td><input type="text"  size="30" name="a58"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>59. length </td>
                    <td><input type="text"  size="30" name="a59"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>60. width</td>
                    <td><input type="text"  size="30" name="a60"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>61. height</td>
                    <td><input type="text"  size="30" name="a61"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>62. ground clearance</td>
                    <td><input type="text"  size="30" name="a62"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>63. wheel base</td>
                    <td><input type="text"  size="30" name="a63"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>64. front trend</td>
                    <td><input type="text"  size="30" name="a64"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>65. kerb weight</td>
                    <td><input type="text"  size="30" name="a65"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>66. gross weight</td>
                    <td><input type="text"  size="30" name="a66"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>67. front headroom</td>
                    <td><input type="text"  size="30" name="a67"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>68. front legroom</td>
                    <td><input type="text"  size="30" name="a68"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>69. rear headroom</td>
                    <td><input type="text"  size="30" name="a69"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>70. rear legroom</td>
                    <td><input type="text"  size="30" name="a70"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>71.air conditionar </td>
                    <td><input type="text"  size="30" name="a71"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>72. cd player</td>
                    <td><input type="text"  size="30" name="a72"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>73. anti-lock braking system</td>
                    <td><input type="text"  size="30" name="a74"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>74. power steering</td>
                    <td><input type="text"  size="30" name="a74"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>75. power windows</td>
                    <td><input type="text"  size="30" name="a75"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>76. leather seats</td>
                    <td><input type="text"  size="30" name="a76"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>77. central locking</td>
                    <td><input type="text"  size="30" name="a77"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>78. brake assist</td>
                    <td><input type="text"  size="30" name="a78"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>79. power doorlocks</td>
                    <td><input type="text"  size="30" name="a79"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>80. child safety locks</td>
                    <td><input type="text"  size="30" name="a80"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>81. anti theft alarm</td>
                    <td><input type="text"  size="30" name="a81"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>82. driver airbag</td>
                    <td><input type="text"  size="30" name="a82"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>83. passenger airbag</td>
                    <td><input type="text"  size="30" name="a83"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>84. side airbag front</td>
                    <td><input type="text"  size="30" name="a84"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>85. side airbag rear</td>
                    <td><input type="text"  size="30" name="a85"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>86. night rear view mirror</td>
                    <td><input type="text"  size="30" name="a86"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>87. passenger side rear view mirror</td>
                    <td><input type="text"  size="30" name="a87"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>88. xenon headlamps</td>
                    <td><input type="text"  size="30" name="a88"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>89. halogen headlapms</td>
                    <td><input type="text"  size="30" name="a89"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>90. rear seatbelts</td>
                    <td><input type="text"  size="30" name="a90"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>91. seatbelt warning</td>
                    <td><input type="text"  size="30" name="a91"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>92. door ajar warning</td>
                    <td><input type="text"  size="30" name="a92"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>93. side impact beams</td>
                    <td><input type="text"  size="30" name="a93"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>94. front impact beams</td>
                    <td><input type="text"  size="30" name="a94"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>95. traction control</td>
                    <td><input type="text"  size="30" name="a95"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>96. adjustable seats</td>
                    <td><input type="text"  size="30" name="a96"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>97. keyless entry</td>
                    <td><input type="text"  size="30" name="a97"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>98. tyre pressure monitor</td>
                    <td><input type="text"  size="30" name="a98"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>99. vehicle stability control system</td>
                    <td><input type="text"  size="30" name="a99"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>100. engine immobilizer</td>
                    <td><input type="text"  size="30" name="a100"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>101. crash sensor</td>
                    <td><input type="text"  size="30" name="a101"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>102. centrally mounted fuel tank</td>
                    <td><input type="text"  size="30" name="a102"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>103. engine check warning</td>
                    <td><input type="text"  size="30" name="a103"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>104. automatic headlamps</td>
                    <td><input type="text"  size="30" name="a104"></td>
                </tR>
                  
                 
                
                 <tR>
                    <td>105. clutch lock</td>
                    <td><input type="text"  size="30" name="a105"></td>
                </tR>
                  
                 
                
                 <tR>
                    
                    <td colspan="2" align="center"><input type="submit" value="submit" name="s"></td>
                </tR>
                
                
                
          </table>
        
        </form>
    </body>
</html>
