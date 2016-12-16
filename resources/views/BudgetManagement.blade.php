<!DOCTYPE html>
<html>
	<head>
		<title>Budget management</title>
		<link rel="stylesheet" type="text/css" href="/css/styles.css">
		<link rel="stylesheet" type="text/css" href="/fonts/font-awesome.min.css">
		<script src="/js/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"><\/script>')</script>
		<script src="/js/script.js"></script>
		<style>
			table {
				border-collapse: collapse;
				width: 100%;
				background: #f6f6f6;
			}
			th {
				background-color: #f2f2f2;
				color: #ffffff;
				background: #27ae60;
				padding: 8px 4px;
				text-align: left;
			}
			tr:nth-child(odd) {
				background: #e9e9e9;
			}
			td:last-child {
				width: 13%;
			}
			td {
				width: 15%;
			}
			tr:last-child {
				font-weight: bold;
			}
			td {
				text-align: left;
				padding: 4px;
			}
			.setting-rate-box {
				width: 100px;
			}
			.page-content{
				position: relative;
				width: 100%;
				box-sizing: border-box;
				padding-bottom: 40px;
				padding-left: 40px;
				padding-right: 40px;
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
                    <li><a href="/time_management">Time Management</a></li>
                    <li><a href="budget">Budget Management</a></li>
                    <li><a href="kpi">L-KPI</a></li>
                    <li><a href="work">Shift Table</a></li>
                </ul>
            </nav>
        </div>
    </div>
		</div>
		<div class="page-content">
			<div class="container">
				<div style="margin-top: 20px">
					Select a month
					<select style="margin-left: 5px; margin-right: 30px; width: 100px">
						<option value="" selected hidden></option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
					</select>
					Year
					<input type="text" name="year" style="margin-left: 5px; width: 100px">
				</div>
				</br>
				<hr>
				<div>
					<p><b>Area WEST</b></p>
					<table>
						<tr>
							<th>Location</th>
							<th>Sales</th>
							<th>Cost</th>
							<th>Profit</th>
							<th>Profit rate</th>
							<th>Setting rate</th>
						</tr>
						<tr>
							<td>Location 1</td>
							<td>&yen;10,000,000</td>
							<td>&yen;7,000,000</td>
							<td>&yen;3,000,000</td>
							<td></td>
							<td><input type="text" name="" class="setting-rate-box"> %</td>
						</tr>
						<tr>
							<td>Location 2</td>
							<td>&yen;1,000,000</td>
							<td>&yen;500,000</td>
							<td>&yen;500,000</td>
							<td>50.00%</td>
							<td><input type="text" name="" class="setting-rate-box"> %</td>
						</tr>
						<tr>
							<td>Location N</td>
							<td>&yen;15,000,000</td>
							<td>&yen;14,000,000</td>
							<td>&yen;1,000,000</td>
							<td>6.67%</td>
							<td><input type="text" name="" class="setting-rate-box"> %</td>
						</tr>
						<tr>
							<td>Subtotal</td>
							<td>&yen;26,000,000</td>
							<td>&yen;21,500,000</td>
							<td>&yen;4,500,000</td>
							<td>17.31%</td>
							<td><input type="text" name="" class="setting-rate-box"> %</td>
						</tr>
					</table>
					<hr>
				</div>
						<div>
					<p><b>Area CENTRAL</b></p>
					<table>
						<tr>
							<th>Location</th>
							<th>Sales</th>
							<th>Cost</th>
							<th>Profit</th>
							<th>Profit rate</th>
							<th>Setting rate</th>
						</tr>
						<tr>
							<td>Location 1</td>
							<td>&yen;10,000,000</td>
							<td>&yen;7,000,000</td>
							<td>&yen;3,000,000</td>
							<td></td>
							<td><input type="text" name="" class="setting-rate-box"> %</td>
						</tr>
						<tr>
							<td>Location 2</td>
							<td>&yen;1,000,000</td>
							<td>&yen;500,000</td>
							<td>&yen;500,000</td>
							<td>50.00%</td>
							<td><input type="text" name="" class="setting-rate-box"> %</td>
						</tr>
						<tr>
							<td>Location N</td>
							<td>&yen;15,000,000</td>
							<td>&yen;14,000,000</td>
							<td>&yen;1,000,000</td>
							<td>6.67%</td>
							<td><input type="text" name="" class="setting-rate-box"> %</td>
						</tr>
						<tr>
							<td>Subtotal</td>
							<td>&yen;26,000,000</td>
							<td>&yen;21,500,000</td>
							<td>&yen;4,500,000</td>
							<td>17.31%</td>
							<td><input type="text" name="" class="setting-rate-box"> %</td>
						</tr>
					</table>
					<hr>
				</div>
						<div>
					<p><b>Area EAST</b></p>
					<table>
						<tr>
							<th>Location</th>
							<th>Sales</th>
							<th>Cost</th>
							<th>Profit</th>
							<th>Profit rate</th>
							<th>Setting rate</th>
						</tr>
						<tr>
							<td>Location 1</td>
							<td>&yen;10,000,000</td>
							<td>&yen;7,000,000</td>
							<td>&yen;3,000,000</td>
							<td></td>
							<td><input type="text" name="" class="setting-rate-box"> %</td>
						</tr>
						<tr>
							<td>Location 2</td>
							<td>&yen;1,000,000</td>
							<td>&yen;500,000</td>
							<td>&yen;500,000</td>
							<td>50.00%</td>
							<td><input type="text" name="" class="setting-rate-box"> %</td>
						</tr>
						<tr>
							<td>Location N</td>
							<td>&yen;15,000,000</td>
							<td>&yen;14,000,000</td>
							<td>&yen;1,000,000</td>
							<td>6.67%</td>
							<td><input type="text" name="" class="setting-rate-box"> %</td>
						</tr>
						<tr>
							<td>Subtotal</td>
							<td>&yen;26,000,000</td>
							<td>&yen;21,500,000</td>
							<td>&yen;4,500,000</td>
							<td>17.31%</td>
							<td><input type="text" name="" class="setting-rate-box"> %</td>
						</tr>
					</table>
					<hr>
				</div>
				<div>
					<table>
						<tr>
							<td>Gross total</td>
							<td>&yen;78,000,000</td>
							<td>&yen;66,800,000</td>
							<td>&yen;11,200,000</td>
							<td>14.36%</td>
							<td></td>
						</tr>
					</table>
				</div>
			</div>
		</div>



	</body>
</html>
