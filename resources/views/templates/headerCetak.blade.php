<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT SATRIYO MEGA SARANA</title>
    <div class="containerlogo">
        <div class="headerlogo row">
            <img src=" {{ asset("/img/logo-pt.png") }}">
        </div>
        <div class="headerkonten">
            <h1 class="header-tittle">PT. SATRIYO MEGA SARANA</h1>
            <p class="text">Jl. Setrayasa Barat 1 No. Kav 19 Kedungjaya Kedawung Cirebon 45135 Telp. (0231) 8807370</p>
        </div>
    </div>
    <div class="divider"></div>
</head>
</html>


<style>
    .containerlogo{
        padding-top: 0;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: flex-end
    }

    .headerlogo {
        display: flex;
        margin: 0;
        padding: 0
    }

    .headerlogo img {
        height: 4.8rem;
        width: 6rem;
        margin-right: 0px;
        align-items: center;
        justify-content: center
    }

    .headerkonten h1.header-tittle {
        margin: 0 0 -4px 0;
        padding: 0;
        font-size: 24pt;
        margin-bottom: 12px
    }

    .headerkonten{
        justify-content: center;
        text-align: center;
        align-items: center
    }
    
    .headerkonten p {
        margin-top: -4px;
        padding: 0
    }
    .divider {
        border-top: 2px solid;
        margin: 2px 0 0 0; 
    }

    .text {
        margin-bottom: 0;
        padding: 0;
    }
</style>