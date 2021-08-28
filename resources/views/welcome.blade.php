<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Monitoring</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <link rel="icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMoAAAD6CAMAAADXwSg3AAABa1BMVEX///8AAAABmQAAM8z///4AjADOzs7g4OBZWVkAlwD8//tmZmb///wAHr0AkgAAjwDByuzj+eOXotjy//AAiQD//P/G0OTY8dm+5MEAI8QAH7aZypkBM9Ku2KwAMs2g06R5vnPV6PY2mDVlsGRMTEzX3fS0tLRFqETG68qWlpanp6eHh4cAJrTu7u4AGLiJl9EAI8kANsgMObd3d3eLi4s+Pj7V1dWsrKwfHx/ExMT9//QAggArKytra2vw9PypuN9PZchDWsAAAKQAN8SCuIM3NzcjIyO/xtx8j9dwg9Vec842ULojP7FdcLktUcbm6fVFW8wpRcGZqNKKmdsAJ7mEkL0AB8AAL68cRapziM4ZP8Tu9/8AL9yltuUPOKxldstBW7EAEJTo7v/M2vVVb7Wlr9N2jMVDrEDC3MVltGOjxaPk8eNHnkSJzYuGsIgglSyn8qNdn2Ox5K5gwGR3wHGVvJu31Lh1z3PA67/a4XDeAAASD0lEQVR4nO1di1/TyBYONAEzpilCAzYNvRQEBEpoBRQKggi+QGCFLqwLPna5sih1vdfr5fLn3zmTd5q0ebbFXz+l6CSZmS/nzJlzzkxSiooJa+Mv1vtfvtp+srGz8/r1zs7Gk+1XL/vXX4yvxdVi9BD21/t39wpyMpNMijkTErlMUsR/C3u7c+vjQqv72QD7fYe/FMRKRipKuOuSJOH+m6jggkQCM5Iyolj45bBvv9X9dcFa39s3YjJXKiUwgRL+RT7w/zWQUnIsl5PwZ0UU37ztazt92z/4WClmSN9z+L5jmRAJmIWCC0tEMOq/8NHSZqWY3OhvI+Hs9++IGehaTtEoLI8EIEdoGQqmFCTIYdA3cnqiJIp77cFm7WBDLkpKF4NCKsp7/a3WtMEPWB5kYIQC1reMuDvYOh7C+o6cgUGeIJYpuFAkrGylUkbe+9QaImsHx0UYvGRghBILGIvEKR46FbEy13w9WzssZBLE4II1yoUbK8QkJIhVy4iHzSUjHBQqCTCpEQPPOIlKUyVzcJyBuTwOKlBrsXDQJLem77UIs3a4oe5ORTotJYrv15tAZP+JDCYHBBJyhDgABl2JmLTixnjMRIRfnx6JgKQYK5Li0dPz2Vip9A42EbF6MzRCHP5sAigOcfgzTiqCgMqoCSgjgeLipILJcAjF2oCKMkWXY26CowWBawIEgY5ZKB100IE7mjGNNEYUTJoxi3hBaCKtFoYJIZlwre6/CVQoMvt9bYUQ/uV45SjZRiiKgdNL44Xog6twKASMx/aPi63uuhWbknQcSMfWHuRK0SciwqBUCshlp92YJCRY0vjNP5PtCmTZGowVqbSp5uolJVGfyWSS+EciqxMlKC1Fl83IwTJH6YlfJnOilw7kSPIFVoekYlJ8sLP99nDu8PDlq4+/i3KxCDzIylekEN/6Y7IuNxIIwSa+8bi3Gfn3D/1nf8KFEJLDr5Pxd+d7YlJJ80eZMZNK8oEfJuMFT63nTkGt5DcvzxBHkeCPxJiQZMB/aGr/3XYhI0Wb+5NKCdnH9LL23qN+lxIZ8cMgwvErDdkYhGhw+2jVASxzsCL2WpYitR54AB57Typ/rJDFhrpLQJBpLWWSL4lx5EAolCBAGkOpgnh/EKAjtL6DyUhR8YHV2dxHr0wORKkxwJwUX+UR1cj7xuJ58R6PmYSHSr1CnPPGZPwI7GkjFDPyxjgHabH6tQlY3eiTObnooU7PKB55Gy6f+r3goH+dKiOsVw3WDzjIaApU3lOl3uFxqY+jG+epaKoMJLgyahBF0DRXLiMYNRHCW+hCY8PDeTkPRjY2XFTDkwVsoAUh0vwcTTfS6w466MAjuHKjQezFItQDwhNRRMu/XN3JGbuD9fNqHPiNYdqnBeweNCPH19AOw/FQeUI8EdW/m95Rt6J8fjxfH+P7tBBOPxC936gRr8D1uPWl/6l4VH8NWn56EHIxCgtl/w85mhXxI/HpuXMra8e5kpRQdgQClG10OdURhnAxl/mIGluGuhAwmReyBBkHqB2qPoXa1T2Kyt7RnNZqXWzikyt/OrZymEmcSpsJskuiUqmIxQxUWdrcJFuCsE8vbYr5shDSAIH/+aGo7DRSdotuwhZRiWQ0yL4w77FLLpFxFMtaAd8pXKkoHu99eDs3N3e+u/EA84F7B9EGvlA8x6M2NBVE50UsfmgLNmBlisnKg9c7v2+KcrKYKPlJa+AzK04BZX8G35dk8kn/4AlpEYzVSX79QwHYQBObpcoJB8vQIangis8rOSUdkykef3hHtk0glD872C0UfaWasFgcgjChkCjJbw72IWdCJhcSzmJtOFn/WKhAOqsEl+HiUFyUfExeTJDhUdjuOwFnHIJpiAVwYzueslYalVyuUCuW9SN5Zx0SDhAL0BASkK0ZxHSf/VPGcjk9ygvYlAvh5hX4QNQrbEVyxd0zJRlAExWAaAAf79uQieZ5g5SpTSX9Vvh04hJW4P73vUkmTnejcjnwaPkjUSz1uRxdTxJDY96j7Aop8cB+/YuPeSxnLGWnujEFdH4knoWcHY0KOXrjaPuEc56uy1x+Q/RijckkUSra78ggqKuLZ4Olj4v7foNYPhoqAvXpHIFrWasESm5zV1a3heE/FohJrUT5JcvyR1sFOFJHoLGO952DfARaox1lFgAc5P7wOETlGio0JDexzznuGflx25yNaAHqdXQncQzPYRaCC9FAVLAKCE62kCZa58M7crv9HXTQwU0DmJ+1wcG+M9MO1zP1pwZnrX72pS7AjJ0UcLBXlGGKkRWIaoFsxdNfW93deoCJjDqs4GAGOzDJ5ION7e0ne5WjIsQzmiegxW5Sbq/V3a0HoELn5dNNKSk+eZdXCk/ODl+L5GEAPRQgjlhJbItnxVyAyOS3l0sUzvPYFeEQWdooUyd9O0mpJtIUm/E0QlBw8Jd7K28QgZDIAzwS7EOV+0XJ5jSf5l61uLsNwR2c1watNJ1/nbGL5U0ruucHwhqq8WCxrzhwsiMWzKiIT9t5sBBwtXEAcdJtp0WytTJuCJR9rQ5ROEi3b6QUPC3UtRKwr6GmkCN5DWQJA+h2Z+IOHCQezBk4xD83Nmgpo3dypqghmSkexf1oWFyA/UDHFmtcaedJsi6QQL0tGhkkKVfxuUusbSAgRA8eP9Dw/sHx8W6r+xQQnPkxLUGgTk5O2n9icUYZQYZZB00ywzcTHLHH5J9keqFvwnTvDFjIhl1z2ro1BrqpYsE8Os/nddBBBx10EC96fxpQt2/9JLhNzd/+SfCYetzquxkVHlMPe34SPGy11emggw466KCDDjrwAXgRGyKP+nl+DQkK/UROPPhanZz8a9IPslSbZmizK6wZPNsQTBaWatoQF6nubrbbB9juVLY9FewyzXd7EIWBbp5nsm35sCgaG/v8ecwvLsI98hUf/Cf4ETwX3HZqBs93+HolFJht2MzQhnZsYMD/Q4nlAfKWyzYDqn4bDYDq6Pf2k0rVly02sDJMwesDfL6xLAYYVLb4YFT49HdOaActM9jAJBkELJsepsqo1TKhaVo3QCgVUMO6eeaaasorW+sCmZ52GguiYSzhn/5+Z6DluDOgUxleSQUAg394Jr3C4H/wQSqIDCtfdCoo+48QGOVVCbUMzKXVBgQFdecvnvXnW0cH0ixbNZszIQSoO1WG5VsI5ouZSoj3KiBOuPP1a7aVuLRKhQrs5wqtfLM1SUnYC8lzkTcOSKgJnAaG7txQDF3aqPydZtJMCKTCXBwC6XT6bxuVyzTM3zcP2N+wS4X63OJpLiiskwrBRSqgq2+ulm36vM+mrmrN2mgUFfO+0lBRKNg3Bwt9FV4qRCZN5vLFgQr9LTwTHMGsNNeCrTjmF4b5sE4h2JN/3RlqJmrMlyKWUXxTwwqG/zYU9mVVUeCK4dNhpjoSgKVXhhxfb9BkXNwNCVLBZXtkLSP57oa2SFuSJxBCBJSkDkFo1gJfU1rBenZ9HVZdG+D6qimKfHclHS+wlUn/uxlMKOo6HWfmglTNDDTuRgRA6HtabTUW4HoZJ5elBv5WjhwhUMPpeFgoTLr5SS83NPyzRrSABPSd6Y7R56+NuByohOWh1CII3PeVuHjgMCXrpReXwxHg+/fhu8P/4eOSikPs6EhlJYqcA6THY1MwlvGgXoArMD5h/X0ShKnJ5Mj5MA5RsDO2IryfLJZOqLSUA9JbXpnAQmtUN5KdHLocijxd6J0JVWa6+YjI8J8H4N3C0WVW/T5jO5SOSr9YdqzMhVnzcFgF8YcrBgZrFHzY1NgAhzgU3Tv/fVKhspC0iGLIsN3psXLId4iGxBbLR5AZI5kPZoQTonpnZSCMdUfChaSof5RbuuMKVaPxO0j2daS1uQs0GclQIWzSI2XscwtBd5FwNLw+OEQOBY2mIlrETbErI+G/LiCMYMPtTTAj+zU7PDLyYyQofoxs/fhvyFsRyXYvqIZCP9JYyMG2fvAMnxoNO9oiyc7B9kw8tfxggptEPjSTaAAL6agslEcYsjDmM5CHD77aHkxUIGFgjPftDsGiTTffpJyXR9BlQUCfU7730fGwc77VnbcCXiNDoc++XQjWcem0pRAosjX5s99IKOUlTxQQwSZdeC0eLQwI5SrxuT0IQzkpFeeADzXDIGqg6kUuSg6SZRkfcXxzQSNBGKiyHh1V7PJctLrHrsBjX6DKn70ZZByAxqdcpGZwRIK7MAiTKXsZ+2yKj9NyIUgEDakfgQC5n+vL+381znatjMW7gHLxDbZLpEMtipMc3//u18f19VCsRABZxrRRgfUbZ6peFbax15F9RUVwXI4xrH9XqoYTc7ee292snaWX1Sj2SjF3Eee237dJRAAXVdUrDCQaZQWuO3W3Pb7b4qLKsCSxrC0O+ifUnb4Lb15vg/f7DY1BUBg4v8Tii9P3KYfvYGkFLrfS6lO7QfiAJWPut37DlQo0PMkwQa0Z2MEU5tIWYgFcfv2W5pW7bFa2huTIDeBBLu2Eoa1vsLWX2CVeTy24qZWeqFCUbOW61d23YSg7yfBm192Fi1VyPJsezcYXIwbGwNXIN2zTeG8BL89iT2zkqjlbboJg4H62in1N7J+7xrwsmwIW1ezdNhSHHZcXX0b+M5lKp5TkuTIwlCw4Lhytjny5uAEsTKBnLy+uvmSzWyqy2eGri6HLtrG8HXTQQQcddNBBG2D24fLExMTyw9mQ9czcs+HW7fmFR73Wk5YXjcOWA8Zli8tqkXLq4oRLM896bFU/7jJw23aVP9zqcsa0+aRHpgPmezdrKtd64XQ9teBcLzVV0+5McCq3Xah0rZr6POHQZbdypy5POzPpcWx4mQoIVyrm+2/u8rzpYrNy1KFiXD5lbnqhyxlWwUVC5bkjlS7TxeZidyrLzkzmXRsOOGLqUDFatlAxTEKvJyoP9VMWzA3P1Gk4mC1TqdwDe0jwaMqwBI5UjE5Om4vdqBh8LSPaEFXXTA90fXbinl5yLwyV2+YyvXXNcFqoGObYYv1cqBhGzjzITLppEpVhBmwWOzgVXSceWamsWmWldudZPSqCCxNdvSyd1nk/jowKtaSUaoNFpaK2r70U/aGl1JnKqtY5awN6n22WV5dLdFTuOUpletFCUJnfFqfrUFnUumZ1EvSpsWZCVLqzOB9k4DtTWbVKX6UypcwEixa+C3Wo6IPJxkSTeu3N77k3tdxbUxqCyqytJY1Kj6VYpTvlSkWfQe0WSbMr81SUcKSijmTduGhU1H4qCq7xcqWiD+0a26pZxMA+ijcqs736dGFvekpVPEXDFW1bdaWiu4rPKTs0kmHdekcqTjB0Vqcyo3Yf8Eyl5UxlwjQX1XwPhDaGImXiTmXJNPp0KsvG3VTH07ILFfP0uWRvVB31z5pDxWJzdCqzRrd1Vs5ULFiwNaoWm8bQwxkrgnjH7gpmcmN1KupgAcszo91YD1S6bPa19nZN2C6wW+9wVEwqZlBRByylKcmCNyqrjlRMUrFTsc1zYakYFsagsqzdZX2o1KOyqjsolkhFO8dEMEIqt2ZV9Pb2PNKnNs2MGlRU93BaK6LqUVkyBe8Wu6u587FQsc32mmMxbaeimuBb6kz+rB4VYri0mhbN9WsBpHPIHSkV3XN5XkNFDcjVHi/Uo0I6qodYZpukTcLGbN/zeF7BUtRUbPfNREXt2oTRFzcq6i2/Zfs/QIuHHHywxcipaJmvHjsVtavqzaNcqSxpPddHvtkT08qaQcXq8JmpPOsysOhO5ZFelZ4jMiVSNCesdiaMnopmeWqlYs5eLbhTMXVSP91Qsd7aotioLFmaMlMxpUoUog2p6NbJNIVr5tjuNWvqGB0VPd1m6cyUua/60YZUjLDYsFh6cmzJ4tPo01BEVGaX9bYXHKjoB9W5ojEVIxVmlBm5yRlNyXpNuhu546KpsoWK0eCURypGv01JoSW9mq5n89PTU/PPzQ1H7E4azrmFijFYerxSMZTSUDHzgkYtgqSN61HRnQ0LFaNflGcq07ZrCBeTXGxYCpR0qUPFcJusVLTBcs87FUrXHvME79a21Y2OgIpj6AVYsJ7giYpzOnjZMj7CEXFdwLs1bd6vrbox6tDRBkuPhVl9KlTt8oBSl639xyHySb09Dy3o7e2drZmCZ8lJPZoGK5f0WGrombUetNcxq7VTc6Rnev7Ws9XVxdszj7x8Ref/AbD449+Y2Cp6AAAAAElFTkSuQmCC"/>
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
         
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
       
       <section class="vh-100" style="background-color: #4B515D;">
        <div class="container py-5 h-100">

            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-8 col-lg-6 col-xl-4">

                <div class="card" style="color: #4B515D; border-radius: 35px;">
                <div class="card-body p-4">

                    <div class="d-flex">
                    <h6 class="flex-grow-1">Warsaw</h6>
                    <h6>15:07</h6>
                    </div>

                    <div class="d-flex flex-column text-center mt-5 mb-4">
                    <h6 class="display-4 mb-0 font-weight-bold" style="color: #1C2331;"> 13°C </h6>
                    <span class="small" style="color: #868B94">Stormy</span>
                    </div>

                    <div class="d-flex align-items-center">
                    <div class="flex-grow-1" style="font-size: 1rem;">
                        <div><i class="fas fa-wind fa-fw" style="color: #868B94;"></i> <span class="ms-1"> 40 km/h </span></div>
                        <div><i class="fas fa-tint fa-fw" style="color: #868B94;"></i> <span class="ms-1"> 84% </span></div>
                        <div><i class="fas fa-sun fa-fw" style="color: #868B94;"></i> <span class="ms-1"> 0.2h </span></div>
                    </div>
                    <div>
                        <img src="data:image/png;base64,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" width="100px">
                    </div>
                    </div>

                </div>
                </div>

            </div>
            </div>

        </div>
        </section>

            
                        <!--div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                            Anubis_ProjectBMKG v1.0.0.0 (PHP v{{ PHP_VERSION }})
                        </div-->
                    
            
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>

