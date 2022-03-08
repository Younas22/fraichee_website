@include('admin.include.header')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add New Broker</h1>

    </div>

    <!-- Content Row -->
    <div class="card shadow-lg">
        <div class="card-body">
            <div class="row">

                <div class="col-md-3 mt-4" style="border-right:1px solid lightgray">
                    <ul class="nav nav-pills nav-fill mb-3" role="tablist">
                        <li class="nav-item">

                            <a class="nav-link active" data-toggle="tab" href="#COMPANYINFORMATION" role="tab">COMPANY INFORMATION
                            </a>
                            <div class="slide bg-c-blue"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#DEPOSIT" role="tab">DEPOSIT & WITHDRAWAL
                            </a>
                            <div class="slide bg-c-green"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#COMMISSIONS" role="tab">COMMISSIONS & FEES
                            </a>
                            <div class="slide bg-c-red"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#ACCOUNT" role="tab">ACCOUNT INFORMATION
                            </a>
                            <div class="slide bg-c-yellow"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#TRADABLE" role="tab">TRADABLE ASSETS</a>
                            <div class="slide bg-c-yellow"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#TRADINGPLATFORMS" role="tab">TRADING PLATFORMS

                            </a>
                            <div class="slide bg-c-blue"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#TRADINGFEATURES
												" role="tab">TRADING FEATURES
                            </a>
                            <div class="slide bg-c-green"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#CUSTOMER" role="tab">CUSTOMER SERVICE
                            </a>
                            <div class="slide bg-c-red"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#RESEARCH" role="tab">RESEARCH & EDUCATION
                            </a>
                            <div class="slide bg-c-yellow"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#PROMOTIONS" role="tab">PROMOTIONS</a>
                            <div class="slide bg-c-yellow"></div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-9">

                    <div class="tab-content">
                        <div class="tab-pane active" id="COMPANYINFORMATION" role="tabpanel">
                            <div class="">
                                <div class="card-header text-danger f-26">
                                    COMPANY INFORMATION
                                </div>
                                <div class="card-body">
                                    <form action="" class="FormSubmit" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Company Name</label>
                                                    <input type="text" name="title" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Company Logo (size must in 50 Kbs)</label>
                                                    <input type="file" name="file_photo" id="file_photo" onChange="return validate()" class="form-control h-100" required>
                                                    <p id="file_error" class="text-danger text-right m-0"></p>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">REGULATIONS</label>
                                                    <input type="text" name="regulations" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">HEADQUARTERS COUNTRY</label>
                                                    <input type="text" name="headquaters" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">FOUNDATION YEAR</label>
                                                    <input type="text" name="foundation" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">PUBLICLY TRADED</label>
                                                    <input type="text" name="traded" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">NUMBER OF EMPLOYEES</label>
                                                    <input type="text" name="employees" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">

                                            </div>
                                            <div class="col-sm-4">
                                                Never End
                                                <input type="checkbox" name="neverEnd" id="neverEnd" value="1">
                                            </div>
                                            <div class="col-sm-4 txtTime">
                                                <div class="form-group">
                                                    <label for="">Start Date</label>
                                                    <input type="date" name="start" class="form-control" id="startDatetime">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 txtTime">
                                                <div class="form-group">
                                                    <label for="">End Date</label>
                                                    <input type="date" name="end" class="form-control" id="endDatetime">
                                                </div>
                                            </div>
                                        </div>
                                        <div>

                                            <input type="submit" id="doaction" class="btn btn-outline-primary" value="Save">

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="DEPOSIT" role="tabpanel">
                            <div class="">
                                <div class="card-header text-danger f-26">
                                    DEPOSIT & WITHDRAWAL
                                </div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label for="">DEPOSIT OPTIONS</label>
                                            <input type="text" name="deposit" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">WITHDRAWAL OPTIONS</label>
                                            <input type="text" name="withdrawal" class="form-control">
                                        </div>

                                        <div>

                                            <input type="submit" id="doaction" class="btn btn-outline-primary" value="Save">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="COMMISSIONS" role="tabpanel">
                            <div class="">
                                <div class="card-header text-danger f-26">
                                    COMMISSIONS & FEES
                                </div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label for="">COMMISSION ON TRADES</label>
                                            <input type="text" name="commission" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">FIXED SPREADS</label>
                                            <input type="text" name="spread" class="form-control">
                                            <div>

                                            </div>
                                        </div>


                                        <div>
                                            <input type="hidden" name="activeForm" class="form-control" value="COMMISSIONS & FEES">
                                            <input type="submit" id="doaction" class="btn btn-outline-primary" value="Save">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="ACCOUNT" role="tabpanel">
                            <div class="">
                                <div class="card-header text-danger f-26">
                                    ACCOUNT INFORMATION
                                </div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">TRADING DESK TYPE</label>
                                                    <input type="text" name="trade" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">MIN DEPOSIT</label>
                                                    <input type="text" name="min" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">MAX LEVERAGE</label>
                                                    <input type="text" name="max" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">MINI ACCOUNT</label>
                                                    <input type="text" name="mini" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">PREMIUM ACCOUNT</label>
                                                    <input type="text" name="premium" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">DEMO ACCOUNT</label>
                                                    <input type="text" name="demo" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">

                                                <div class="form-group">
                                                    <label for="">ISLAMIC ACCOUNT</label>
                                                    <input type="text" name="islamic" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">SEGREGATED ACCOUNT</label>
                                                    <input type="text" name="segregated" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">MANAGED ACCOUNT</label>
                                                    <input type="text" name="managed" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">SUITABLE FOR BEGINNERS</label>
                                                    <input type="text" name="beginner" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">SUITABLE FOR PROFESSIONALS</label>
                                                    <input type="text" name="professional" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">SUITABLE FOR SCALPING</label>
                                                    <input type="text" name="scalping" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">SUITABLE FOR DAILY TRADING</label>
                                                    <input type="text" name="daily" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">SUITABLE FOR WEEKLY TRADING</label>
                                                    <input type="text" name="weekly" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">SUITABLE FOR SWING TRADING</label>
                                                    <input type="text" name="swing" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <input type="hidden" name="activeForm" class="form-control" value="ACCOUNT INFORMATION">
                                            <input type="submit" id="doaction" class="btn btn-outline-primary" value="Save">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="TRADABLE" role="tabpanel">
                            <div class="">
                                <div class="card-header text-danger f-26">
                                    TRADABLE ASSETS
                                </div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">TRADES CURRENCIES</label>
                                                    <input type="text" name="currency" class="form-control" required required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">TRADES COMMODITIES</label>
                                                    <input type="text" name="tradeCommodities" class="form-control" required required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">TRADES INDICES</label>
                                                    <input type="text" name="tradeIndices" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">TRADES STOCKS</label>
                                                    <input type="text" name="tradeStocks" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">TRADES CRYPTOCURRENCY</label>
                                                    <input type="text" name="cryptocurrency" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">TRADES ETF'S</label>
                                                    <input type="text" name="etfs" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">TRADES BONDS</label>
                                                    <input type="text" name="tradeBonds" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">TRADES FUTURES</label>
                                                    <input type="text" name="tradeFuture" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">TRADES OPTIONS</label>
                                                    <input type="text" name="options" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">

                                                <div class="form-group">
                                                    <label for="">SUPPORTED CRYPTOCOINS</label>
                                                    <input type="text" name="cryptocoins" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">NUMBER OF TRADABLE ASSETS</label>
                                                    <input type="text" name="tradableassets" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">NUMBER OF CURRENCY PAIRS</label>
                                                    <input type="text" name="currencypairs" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">NUMBER OF CRYPTOCURRENCIES</label>
                                                    <input type="text" name="cryptocurrencies" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">NUMBER OF STOCKS</label>
                                                    <input type="text" name="NoOfStocks" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">NUMBER OF INDICES</label>
                                                    <input type="text" name="noOfIndices" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">NUMBER OF COMMODITIES</label>
                                                    <input type="text" name="noOfCommodities" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">NUMBER OF FUTURES</label>
                                                    <input type="text" name="noOfFutures" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">NUMBER OF OPTIONS</label>
                                                    <input type="text" name="noOfOptions" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">NUMBER OF BONDS</label>
                                                    <input type="text" name="noOfBonds" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <input type="hidden" name="activeForm" class="form-control" value="TRADABLE ASSETS">
                                            <input type="submit" id="doaction" class="btn btn-outline-primary" value="Save">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane " id="TRADINGPLATFORMS" role="tabpanel">
                            <div class="">
                                <div class="card-header text-danger f-26">
                                    TRADING PLATFORMS
                                </div>
                                <div class="card-body">
                                    <form action="" method="post" >
                                        <div class="form-group">
                                            <label for="">TRADING PLATFORMS</label>
                                            <input type="text" name="platform" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">OS COMPATIBILITY</label>
                                            <input type="text" name="os" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">MOBILE TRADING</label>
                                            <input type="text" name="mobile" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">TRADING PLATFORM SUPPORTED LANGUAGES</label>
                                            <textarea name="language" id="language" class="form-control" cols="30" rows="10" required></textarea>
                                        </div>

                                        <div>
                                            <input type="hidden" name="activeForm" class="form-control" value="TRADING PLATFORMS">
                                            <input type="submit" id="doaction" class="btn btn-outline-primary" value="Save">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="TRADINGFEATURES" role="tabpanel">
                            <div class="">
                                <div class="card-header text-danger f-26">
                                    TRADING FEATURES
                                </div>
                                <div class="card-body">
                                    <form action="" method="post" >
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">EDUCATIONAL SERVICES</label>
                                                    <input type="text" name="educationServices" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">SOCIAL TRADING / COPY TRADING</label>
                                                    <input type="text" name="social" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">TRADING SIGNALS</label>
                                                    <input type="text" name="signals" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">EMAIL ALERTS</label>
                                                    <input type="text" name="email" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">GUARANTEED STOP LOSS</label>
                                                    <input type="text" name="stop" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">GUARANTEED LIMIT ORDERS</label>
                                                    <input type="text" name="limited" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">GUARANTEED FILLS / LIQUIDITY</label>
                                                    <input type="text" name="guaranteed" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">OCO ORDERS</label>
                                                    <input type="text" name="oco" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">TRAILING SP/TP</label>
                                                    <input type="text" name="trailings" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">AUTOMATED TRADING</label>
                                                    <input type="text" name="automated" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">API TRADING</label>
                                                    <input type="text" name="api" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">VPS SERVICES</label>
                                                    <input type="text" name="vps" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">TRADING FROM CHART</label>
                                                    <input type="text" name="chart" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">INTEREST ON MARGIN</label>
                                                    <input type="text" name="margin" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">OFFERS HEDGING</label>
                                                    <input type="text" name="hedging" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">OFFERS PROMOTIONS</label>
                                                    <input type="text" name="promotions" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">ONE-CLICK TRADING</label>
                                                    <input type="text" name="oneClick" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">EXPERT ADVISORS (EA)</label>
                                                    <input type="text" name="advisors" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">OTHER TRADING FEATURES</label>
                                                    <input type="text" name="features" class="form-control" required>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <input type="hidden" name="activeForm" class="form-control" value="TRADING FEATURES">
                                            <input type="submit" id="doaction" class="btn btn-outline-primary" value="Save">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="CUSTOMER" role="tabpanel">
                            <div class="">
                                <div class="card-header text-danger f-26">
                                    CUSTOMER SERVICE
                                </div>
                                <div class="card-body">
                                    <form action="" method="post" >
                                        <div class="form-group">
                                            <label for="">CUSTOMER SUPPORT LANGUAGES</label>
                                            <textarea name="languages" class="form-control" id="" cols="30" rows="10" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="">24H SUPPORT</label>
                                            <input type="text" name="supports" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">SUPPORT DURING WEEKENDS</label>
                                            <input type="text" name="weekend" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">LIVE CHAT</label>
                                            <input type="text" name="chat" class="form-control" id="" required>
                                        </div>

                                        <div>
                                            <input type="hidden" name="activeForm" class="form-control" value="CUSTOMER SERVICE">
                                            <input type="submit" id="doaction" class="btn btn-outline-primary" value="Save">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="RESEARCH" role="tabpanel">
                            <div class="">
                                <div class="card-header text-danger f-26">
                                    RESEARCH & EDUCATION
                                </div>
                                <div class="card-body">
                                    <form action="" method="post" >
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">DAILY MARKET COMMENTARY</label>
                                                    <input type="text" name="commentary" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">NEWS (TOP-TIER SOURCES)</label>
                                                    <input type="text" name="news" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">AUTOCHARTIST</label>
                                                    <input type="text" name="autochartist" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">TRADING CENTRAL (RECOGNIA)</label>
                                                    <input type="text" name="tradingCentral" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">DELKOS RESEARCH</label>
                                                    <input type="text" name="delkos" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">ACUITY TRADING</label>
                                                    <input type="text" name="acuity" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">WEBINARS</label>
                                                    <input type="text" name="webinars" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">VIDEO EDUCATION</label>
                                                    <input type="text" name="education" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">ECONOMIC CALENDAR</label>
                                                    <input type="text" name="calendar" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <input type="hidden" name="activeForm" class="form-control" value="RESEARCH & EDUCATION">
                                            <input type="submit" id="doaction" class="btn btn-outline-primary" value="Save">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="PROMOTIONS" role="tabpanel">
                            <div class="">
                                <div class="card-header text-danger f-26">
                                    PROMOTIONS
                                </div>
                                <div class="card-body">
                                    <form action="" method="post" >
                                        <div class="form-group">
                                            <label for="">PROMOTIONS</label>
                                            <input type="text" name="promotions" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">READ REVIEW</label>
                                            <input type="text" name="review" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Link</label>
                                            <input type="text" name="link" class="form-control" required>
                                        </div>


                                        <div>
                                            <input type="hidden" name="activeForm" class="form-control" value="PROMOTIONS">
                                            <input type="submit" id="doaction" class="btn btn-outline-primary" value="Save">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@include('admin.include.footer')
