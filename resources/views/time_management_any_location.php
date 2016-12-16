<!DOCTYPE html>
<html>
<head>
	<title>Time management</title>
	<link rel="stylesheet" type="text/css" href="/css/styles.css">
	<link rel="stylesheet" type="text/css" href="/fonts/font-awesome.min.css">
	<script src="/js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"><\/script>')</script>
	<script src="/js/script.js"></script>
</head>
<body>

<div class="header">
    <div class="container">
        <div class="logo">
            <h1>
                PAL
            </h1>
        </div>
        <div class="navbar">
            <nav class="global_nav">
                <ul>
                    <li><a href="admin">Time Management</a></li>
                    <!-- <li><a href="budget">Budget Management</a></li> -->
                    <li><a href="kpi-1">L-KPI</a></li>
                    <li><a href="work-1">Shift Table</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<div class="t_manag_any">
    <div class="container">
        <div class="content">
            <div class="report">
                <!-- Left div -->
                <div class="left">
                    <div class="report-header">
                       <div class="location">
                           <h3>Location 1</h3>
                       </div>

                       <div class="stuff-list">
                           <select name="stuff">
                                <option value="" disabled selected></option>
                               <option value="">Rana</option>
                               <option value="">Vinei</option>
                               <option value="">Kimheng</option>
                               <option value="">Sreynet</option>
                               <option value="">Visal</option>
                               <option value="">Kimcheng</option>
                               <option value="">Vanchhay</option>

                           </select>
                       </div>
                    </div>

                    <table>
                        <tr class="heading">
                            <th>No</th>
                            <th>Stuff name</th>
                            <th>Time in</th>
                            <th>Time out</th>
                            <th>Rest</th>
                            <th>Total</th>
                        </tr>
                        <tr class="record">
                            <td class="stuff-no"></td>
                            <td class="stuff-name">Rana</td>
                            <td class="timein"></td>
                            <td class="timeout"></td>
                            <td class="timerest"></td>
                            <td class="totalhour"></td>
                        </tr>

                        <tr class="record">
                            <td class="stuff-no"></td>
                            <td class="stuff-name">Sothea</td>
                            <td class="timein"></td>
                            <td class="timeout"></td>
                            <td class="timerest"></td>
                            <td class="totalhour"></td>
                        </tr>

                        <tr class="record">
                            <td class="stuff-no"></td>
                            <td class="stuff-name">Vuthy</td>
                            <td class="timein"></td>
                            <td class="timeout"></td>
                            <td class="timerest"></td>
                            <td class="totalhour"></td>
                        </tr>

                        <tr class="record">
                            <td class="stuff-no"></td>
                            <td class="stuff-name">Votanak</td>
                            <td class="timein"></td>
                            <td class="timeout"></td>
                            <td class="timerest"></td>
                            <td class="totalhour"></td>
                        </tr>

                        <tr class="record">
                            <td class="stuff-no"></td>
                            <td class="stuff-name">Vanchhay</td>
                            <td class="timein"></td>
                            <td class="timeout"></td>
                            <td class="timerest"></td>
                            <td class="totalhour"></td>
                        </tr>

                        <tr class="record">
                            <td class="stuff-no"></td>
                            <td class="stuff-name">Sreynet</td>
                            <td class="timein"></td>
                            <td class="timeout"></td>
                            <td class="timerest"></td>
                            <td class="totalhour"></td>
                        </tr>

                        <tr class="record">
                            <td class="stuff-no"></td>
                            <td class="stuff-name">Kimcheng</td>
                            <td class="timein"></td>
                            <td class="timeout"></td>
                            <td class="timerest"></td>
                            <td class="totalhour"></td>
                        </tr>

                        <tr class="record">
                            <td class="stuff-no"></td>
                            <td class="stuff-name">Kimheng</td>
                            <td class="timein"></td>
                            <td class="timeout"></td>
                            <td class="timerest"></td>
                            <td class="totalhour"></td>
                        </tr>

                        <tr class="record">
                            <td class="stuff-no"></td>
                            <td class="stuff-name">Vinei</td>
                            <td class="timein"></td>
                            <td class="timeout"></td>
                            <td class="timerest"></td>
                            <td class="totalhour"></td>
                        </tr>

                        <tr class="record">
                            <td class="stuff-no"></td>
                            <td class="stuff-name">Visal</td>
                            <td class="timein"></td>
                            <td class="timeout"></td>
                            <td class="timerest"></td>
                            <td class="totalhour"></td>
                        </tr>
                    </table>
                </div>
                <!-- /Left div -->

                <!-- Right div -->
                <div class="right">
                    <div class="report-table">
                        <table>
                            <tr class="heading">
                                <th></th>
                                <th class="time"></th>
                                <th class="time"></th>
                                <th class="time"></th>
                                <th class="time"></th>
                                <th class="time"></th>
                                <th class="time"></th>
                                <th class="time"></th>
                                <th class="time"></th>
                                <th class="time"></th>
                                <th class="time"></th>
                                <th class="time"></th>
                                <th class="time"></th>
                                <th class="time"></th>
                                <th class="time"></th>
                                <th class="time"></th>
                                <th class="time"></th>
                                <th class="time"></th>
                                <th class="time"></th>
                                <th class="time"></th>
                                <th class="time"></th>
                                <th class="time"></th>
                                <th class="time"></th>
                                <th class="time"></th>
                                <th class="time"></th>
                                <th class="time"></th>
                                <th class="time"></th>
                                <th class="time"></th>
                                <th class="time"></th>
                                <th class="time"></th>
                                <th class="time"></th>
                                <th>Subtotal</th>
                            </tr>

                            <?php for($i=0; $i<10; $i++){ ?>

                            <tr class="record">
                                <td class="status">
                                    <select name="">
                                        <option value="OK">OK</option>
                                        <option value="NG">NG</option>
                                    </select>
                                </td>
                                <?php for($j=0; $j<30; $j++){ ?>
                                <td class="tasks">
                                    <?php for($k=0; $k<4; $k++){ ?>
                                    <div class="select">
                                        <select name="">
                                            <option disabled selected></option>
                                            <option value="">Task 1</option>
                                            <option value="">Task 2</option>
                                            <option value="">Task 3</option>
                                            <option value="">Task 4</option>
                                        </select>
                                    </div>
                                    <?php } ?>
                                </td>
                                <?php } ?>
                            </tr>

                            <?php } ?>

                        </table>
                    </div>
                </div>
                <!-- /Right div -->

            </div>
        </div>
    </div>
</div>

</body>
</html>
