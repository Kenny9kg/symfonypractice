<?php
/**
 * Created by PhpStorm.
 * User: ccdnkenny
 * Date: 2016/4/20
 * Time: 下午4:30
 */
$viewcounter = 2;
							if($viewcounter = 1 || $viewcounter = 0) {
                                echo "<input type=\"radio\" name=\"radio1\" id=\"radio\" value=\"\" checked=\"checked\">";
                                echo "<label for=\"radio\">";
                                echo "<input type=\"radio\" name=\"radio2\" id=\"radio\" value=\"\" disabled=\"\">";
                                echo "<input type=\"radio\" name=\"radio3\" id=\"radio\" value=\"\" disabled=\"\">";
                            }elseif ($viewcounter == 2) {
                                echo /** @lang text */
                                "<input type=\"radio\" name=\"radio1\" id=\"radio\" value=\"\" ";
                                echo "<label for=\"radio\">";
                                echo "<input type=\"radio\" name=\"radio2\" id=\"radio\" value=\"\" checked=\"checked\">";
                                echo "<input type=\"radio\" name=\"radio3\" id=\"radio\" value=\"\" disabled=\"\">";
                            }elseif ($viewcounter >= 3) {
                                echo "<input type=\"radio\" name=\"radio1\" id=\"radio\" value=\"\" checked=\"checked\">";
                                echo "<label for=\"radio\">";
                                echo "<input type=\"radio\" name=\"radio2\" id=\"radio\" value=\"\" checked=\"checked\">";
                                echo "<input type=\"radio\" name=\"radio3\" id=\"radio\" value=\"\" checked=\"checked\">";
                            }
?>