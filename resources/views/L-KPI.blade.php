<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>


    <script src="/js/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"><\/script>')</script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
          $(function(){
              var role = '<?php if(session_status()===PHP_SESSION_NONE){
  	                              session_start(); echo $_SESSION['role'];
  	                             }elseif (session_status()===PHP_SESSION_ACTIVE) {
  	                               echo $_SESSION['role'];
                                 } ?>';

             if (role == 'manager')
             {
                 $('#budget').hide();
             }
          });
      </script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="/css/styles.css">
      <link rel="stylesheet" type="text/css" href="/fonts/font-awesome.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <style type="text/css">

  		.table {
  			border-collapse: collapse;
  			table-layout: fixed;
  			width: 100%;
  			background: #f6f6f6;
  		}
  		tr:nth-child(odd) {
  				background: #e9e9e9;
  			}
  		th:first-child {
  			width: 20px;
  		}
  		th {
  			color: #ffffff;
  			background: #2980b9;
  			text-align: center;
  		}
  		td:first-child {
  			text-align: center;
  		}
  		td > input {
  			width: 80%;
  		}
  		td:last-child {
  			border-left: 2px solid #2980b9;
  			text-align: right;
  		}
  		.btn {
  			position: absolute;
  			right: 5px;
  			bottom: 0;
  		}
      .table-container{
        position: relative;
  			box-sizing: border-box;
  			padding-left: 20px;
  			padding-right: 20px;
  			padding-top: 40px;
      }
  	</style>
  </head>
  <body>
    <div class="header">
  	    <div class="container">
  	        <div class="logo">
  	            <h1>
  	                {{-- <img src="http://www.pal-style.co.jp/img/hdr-logo.png" alt=""> --}}
  	                PAL
  	            </h1>
  	        </div>
  	        <div class="navbar">
  	            <nav class="global_nav">
  	                <ul>
  										<li><a href="time_management">Time Management</a></li>
            					<li id="budget"><a href="budget">Budget Management</a></li>
  										<li><a href="kpi">L-KPI</a></li>
  										<li><a href="work">Shift Table</a></li>
  	                </ul>
  	            </nav>
  	        </div>
  	    </div>
  	</div>

    <div class="container">
      <div class="content" style="margin-bottom: 50px">

          <div class="row">
              <div class="time-range">

                  <div class="from">
                    <div class="heading">
                      <h4>
                        Clock out time 1
                      </h4>
                    </div>
                      <div class="hour" id="from-hour">
                          <span class="increase increaseHour">
                              <i class="fa fa-plus"></i>
                          </span>
                          <input name="start-hour"
                                 type="text"
                                 class="time-input"
                                 value="00">
                          <span class="decrease decreaseHour">
                              <i class="fa fa-minus"></i>
                          </span>
                      </div>

                      <div class="semicolon">
                        <h4>:</h4>
                      </div>

                      <div class="minute" id="from-minute">
                          <span class="increase increaseMinute">
                              <i class="fa fa-plus"></i>
                          </span>
                          <input name="start-minute"
                                 type="text"
                                 class="time-input"
                                 value="00">
                          <span class="decrease decreaseMinute">
                              <i class="fa fa-minus"></i>
                          </span>
                      </div>
                  </div>

                  <div class="divider">
                    <h1>
                      ~
                    </h1>
                  </div>

                  <div class="to">
                    <div class="heading">
                      <h4>
                        Clock out time 2
                      </h4>
                    </div>
                      <div class="hour" id="to-hour">
                          <span class="increase increaseHour">
                              <i class="fa fa-plus"></i>
                          </span>
                          <input name="stop-hour"
                                 type="text"
                                 class="time-input"
                                 value="00">
                          <span class="decrease decreaseHour">
                              <i class="fa fa-minus"></i>
                          </span>
                      </div>
                      <div class="semicolon">
                        <h4>:</h4>
                      </div>
                      <div class="minute" id="to-minute">
                          <span class="increase increaseMinute">
                              <i class="fa fa-plus"></i>
                          </span>
                          <input name="stop-minute"
                                 type="text"
                                 class="time-input"
                                 value="00">
                          <span class="decrease decreaseMinute">
                              <i class="fa fa-minus"></i>
                          </span>
                      </div>

                  </div>

                  <div class="divider">
                    <h1>
                      ~
                    </h1>
                  </div>

                  <div class="to">
                    <div class="heading">
                      <h4>
                        Clock out time 3
                      </h4>
                    </div>
                      <div class="hour" id="to-hour">
                          <span class="increase increaseHour">
                              <i class="fa fa-plus"></i>
                          </span>
                          <input name="stop-hour"
                                 type="text"
                                 class="time-input"
                                 value="00">
                          <span class="decrease decreaseHour">
                              <i class="fa fa-minus"></i>
                          </span>
                      </div>
                      <div class="semicolon">
                        <h4>:</h4>
                      </div>
                      <div class="minute" id="to-minute">
                          <span class="increase increaseMinute">
                              <i class="fa fa-plus"></i>
                          </span>
                          <input name="stop-minute"
                                 type="text"
                                 class="time-input"
                                 value="00">
                          <span class="decrease decreaseMinute">
                              <i class="fa fa-minus"></i>
                          </span>
                      </div>

                  </div>

                  <div class="divider">
                    <h1>
                      ~
                    </h1>
                  </div>

                  <div class="to">
                    <div class="heading">
                      <h4>
                        Clock out time 4
                      </h4>
                    </div>
                      <div class="hour" id="to-hour">
                          <span class="increase increaseHour">
                              <i class="fa fa-plus"></i>
                          </span>
                          <input name="stop-hour"
                                 type="text"
                                 class="time-input"
                                 value="00">
                          <span class="decrease decreaseHour">
                              <i class="fa fa-minus"></i>
                          </span>
                      </div>
                      <div class="semicolon">
                        <h4>:</h4>
                      </div>
                      <div class="minute" id="to-minute">
                          <span class="increase increaseMinute">
                              <i class="fa fa-plus"></i>
                          </span>
                          <input name="stop-minute"
                                 type="text"
                                 class="time-input"
                                 value="00">
                          <span class="decrease decreaseMinute">
                              <i class="fa fa-minus"></i>
                          </span>
                      </div>

                  </div>

              </div>
          </div>
      <div class="table-container">

        <table class="table table-sm">
        	<tr>
        		<th></th>
        		<th>Category</th>
        		<th>Quantity</th>
        		<th>Sales</th>
        	</tr>
        	<tr>
        		<td>1</td>
        		<td>Category 1</td>
        		<td><input type="text" name=""></td>
        		<td>&yen;100</td>
        	</tr>
        	<tr>
        		<td>2</td>
        		<td>Category 2</td>
        		<td><input type="text" name=""></td>
        		<td>&yen;200</td>
        	</tr>
        	<tr>
        		<td>3</td>
        		<td>Category 3</td>
        		<td><input type="text" name=""></td>
        		<td>&yen;4,000</td>
        	</tr>
        	<tr>
        		<td>N</td>
        		<td>Category N</td>
        		<td><input type="text" name=""></td>
        		<td>&yen;100,000</td>
        	</tr>
        </table>

        <table class="table table-sm">
        	<tr>
        		<th></th>
        		<th>Accident</th>
        		<th>Quantity</th>
        		<th style="visibility: hidden"></th>
        	</tr>
        	<tr>
        		<td>1</td>
        		<td><input type="text" name=""></td>
        		<td><input type="text" name=""></td>
        		<td style="border-left: none;"></td>
        	</tr>
        	<tr>
        		<td>2</td>
        		<td><input type="text" name=""></td>
        		<td><input type="text" name=""></td>
        		<td style="border-left: none;"></td>
        	</tr>
        	<tr>
        		<td>3</td>
        		<td><input type="text" name=""></td>
        		<td><input type="text" name=""></td>
        		<td style="border-left: none;"></td>
        	</tr>
        	<tr>
        		<td>20</td>
        		<td><input type="text" name=""></td>
        		<td><input type="text" name=""></td>
        		<td style="border-left: none;"></td>
        	</tr>
        </table>

        <table class="table table-sm">
        	<tr>
        		<th></th>
        		<th>Category</th>
        		<th>Quantity</th>
        		<th>Sales</th>
        	</tr>
        	<tr>
        		<td>1</td>
        		<td><input type="text" name=""></td>
        		<td><input type="text" name=""></td>
        		<td><input type="text" name=""></td>
        	</tr>
        	<tr>
        		<td>2</td>
        		<td><input type="text" name=""></td>
        		<td><input type="text" name=""></td>
        		<td><input type="text" name=""></td>
        	</tr>
        	<tr>
        		<td>3</td>
        		<td><input type="text" name=""></td>
        		<td><input type="text" name=""></td>
        		<td><input type="text" name=""></td>
        	</tr>
        	<tr>
        		<td>4</td>
        		<td><input type="text" name=""></td>
        		<td><input type="text" name=""></td>
        		<td><input type="text" name=""></td>
        	</tr>
        </table>
        Upload file: <input type="file" name="">
        <button type="button" class="btn btn-success">Done</button>
      </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
