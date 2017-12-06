<nav class="navbar navbar-layout-page">
        <div class="container-fluid">
            <div class="navbar-header layout">
                <button type="button" id="button-menu-left-toggle" class="navbar-toggle-layout is-active">
                    <img src="images/menu-ico.png">
                </button>
                <a href="index.html"><img border="0" class="nav-logo-site" src="images/logo.png" alt="BitBankCoin the next generation of advanced solution for global money transaction"></a>
            </div>
            <div class="collapse navbar-collapse" id="navigation-example-2">
                <ul class="nav navbar-nav navbar-right">
                    <li class="li-menu-pc">
                        <b>1 BTC = </b><b id="btc--price">9951.02<span> USD</span></b>
                    </li>
                    <li class="navbar-right-li-line li-menu-pc">|</li>
                    <li class="li-menu-pc">
                        <b>1 ETH = </b><b id="eth--price">432.67<span> USD</span></b>
                    </li>
                    <li class="navbar-right-li-line li-menu-pc">|</li>
                    <li class="li-menu-pc">
                        <b>1 UCH = </b><b id="uch--price">1<span> USD</span></b>
                    </li>
                        <li class="navbar-right-li-line li-menu-pc">|</li>
                        <li>
                            <b style="font-size:14px; text-transform:uppercase"><?=$_SESSION['login']['user']?></b>
                        </li>
                        <li class="navbar-right-li-line">|</li>
                        <li>
                            <a href="sign-out.html" class="btn-signout" style="padding:0px;">
                                <span style="color:#202020"><i class="fa fa-sign-out"></i> Sign out</span>
                            </a>
                        </li>
                </ul>
            </div>
        </div>
    </nav>