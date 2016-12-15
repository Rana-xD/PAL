<!DOCTYPE html>
<html>
<head>
	<title>PAL</title>
	<link rel="stylesheet" type="text/css" href="/css/styles.css">
	<link rel="stylesheet" type="text/css" href="/fonts/font-awesome.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="/js/script.js"></script>
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
        {{-- <div class="navbar">
            <nav class="global_nav">
                <ul>
                    <li><a href="">Time Management</a></li>
                    <li><a href="">Budget Management</a></li>
                    <li><a href="">Account Management</a></li>
                    <li><a href="">Shift Table</a></li>
                </ul>
            </nav>
        </div> --}}
    </div>
</div>
<div class="container">
            <div class="content">

                <div class="row">
                    <div class="time-range">

                        <div class="from">
                        	<div class="heading">
                        		<h4>
                        			Time in
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
                        			Time out
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

                        <div class="rest-hour">
                        	<div class="heading">
                        		<h4>Rest</h4>
                        	</div>
                        	<div class="minute">
                        		<span class="increase increaseMinute">
                        			<i class="fa fa-plus"></i>
                        		</span>

                        		<input name="rest-minute"
                        		       type="text"
                        		       value="60"
                        		       class="time-input">

                        		<span class="decrease decreaseMinute">
                        			<i class="fa fa-minus"></i>
                        		</span>
                        	</div>
                        	<div class="unit">
                        		<h1>
                        			mn
                        		</h1>
                        	</div>
                        </div>

                    </div>
                </div>

                <div class="row task-container">
                    <div class="tasks-range">

                    	<div class="time-bar">
                    		<span></span>
                    		<span></span>
                    		<span></span>
                    		<span></span>
                    		<span></span>
                    		<span></span>
                    		<span></span>
                    		<span></span>
                    		<span></span>
                    		<span></span>
                            <span></span>
                    		<span></span>
                    		<span></span>
                    		<span></span>
                    		<span></span>
                    		<span></span>
                    		<span></span>
                    		<span></span>
                    		<span></span>
                    		<span></span>
                            <span></span>
                    		<span></span>
                    		<span></span>
                    		<span></span>
                    	</div>

                        <ul class="hours-range">
                            <li class="task-hour">
                                <div class="tasks">
                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>


                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>
                                </div>
                            </li>

                            <li class="task-hour">
                                <div class="tasks">
                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>


                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>
                                </div>
                            </li>

                            <li class="task-hour">
                                <div class="tasks">
                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>


                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>
                                </div>
                            </li>

                            <li class="task-hour">
                                <div class="tasks">
                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>


                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>
                                </div>
                            </li>

                            <li class="task-hour">
                                <div class="tasks">
                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>


                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>
                                </div>
                            </li>

                            <li class="task-hour">
                                <div class="tasks">
                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>


                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>
                                </div>
                            </li>

                            <li class="task-hour">
                                <div class="tasks">
                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>


                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>
                                </div>
                            </li>

                            <li class="task-hour">
                                <div class="tasks">
                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>


                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>
                                </div>
                            </li>

                            <li class="task-hour">
                                <div class="tasks">
                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>


                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>
                                </div>
                            </li>

                            <li class="task-hour">
                                <div class="tasks">
                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>


                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>
                                </div>
                            </li>

                            <li class="task-hour">
                                <div class="tasks">
                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>


                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>
                                </div>
                            </li>

                            <li class="task-hour">
                                <div class="tasks">
                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>


                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>
                                </div>
                            </li>

                            <li class="task-hour">
                                <div class="tasks">
                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>


                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>
                                </div>
                            </li>

                            <li class="task-hour">
                                <div class="tasks">
                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>


                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>
                                </div>
                            </li>

                            <li class="task-hour">
                                <div class="tasks">
                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>


                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>
                                </div>
                            </li>

                            <li class="task-hour">
                                <div class="tasks">
                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>


                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>
                                </div>
                            </li>

                            <li class="task-hour">
                                <div class="tasks">
                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>


                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>
                                </div>
                            </li>

                            <li class="task-hour">
                                <div class="tasks">
                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>


                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>
                                </div>
                            </li>

                            <li class="task-hour">
                                <div class="tasks">
                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>


                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>
                                </div>
                            </li>

                            <li class="task-hour">
                                <div class="tasks">
                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>


                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>
                                </div>
                            </li>

                            <li class="task-hour">
                                <div class="tasks">
                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>


                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>
                                </div>
                            </li>

                            <li class="task-hour">
                                <div class="tasks">
                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>


                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>
                                </div>
                            </li>

                            <li class="task-hour">
                                <div class="tasks">
                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>


                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>
                                </div>
                            </li>

                            <li class="task-hour">
                                <div class="tasks">
                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>


                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>

                                	<div class="task">

                                		<select name="select1" class="tasks-select">
		                                	<option></option>
		                                    <option value="task 1">Task 1</option>
		                                    <option value="task 2">Task 2</option>
		                                    <option value="task 3">Task 3</option>
		                                    <option value="task 4">Task 4</option>
		                                    <option value="task 5">Task 5</option>
                                		</select>
                                	</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

  </body>
</body>
</html>
