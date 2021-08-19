<?php
    session_start();
    include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret Diary</title>
    <!-- Favicon CDN -->
        <link href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAA81BMVEX////CHzTeNkj/zTjC2uH+UF/++vvJOEvBGjHXMUPdKj/slp7or7bACyjBDSv13N/J3uT0SFj/0Tj+SlrAEjTKrbb/7O7+i5P+yDjB2eDyt73C3+bCqrTXYDXdcTa/DDT3tjfPSTXwozf0rjf7vzjU5OnCy9PCSlv/1NjFJTvigTbrljftnTfedTbbazbCXWzCkZ3CnajCtL7CPU/Ce4jUVzX+xsr+fIf+QVL+WGf+k5v/o6v+cn3+Ym/+sbf/6Or1fYjim6PgRFXvxsvlZXPRW2nJNDTCLkHOxczHLjTnjDbCiZbCc4HCTl/STzXl7/LqhI93RpxUAAAFQklEQVR4nO3ce3eaSBgGcNFgqFtwF1hLahKvNYqXaEybbLYb07rVJJuk/f6fZkfxgoDKIIwj53n+HM5J+J33HWa4HBMJBEEQBEEQBEF4TvrLYO2xep3hiUSV9M3tX1/WHLrTbtccOqTkRFHT/vY6MviqidoH1ucTfoiQGD/kXAfq/2hifISi9jXrGL8XNTFOQlFbnYzpu1trOD5CgrlfDg5uNDF+QlG7m0/G6RSMoZBMRmtltKZgHIXWZCSroG0kZkJSu/v6jSbGWDgxamK8hY5AeAiBcN/nt3sg3Pf57Z64CnPZeYZ/bMxDNuQM0ix43y4ayiLC5ihhJJlZJPn9YRg1cngsS9IWV8hJ2pPJPLifKISZemNb2cLPu+Sq8d8oq5juswc6hcnMbxEK38vsgS5hMhlhn/7YQwndwszH6IR9xheZNcLo2jR9DCGEEEIIIYQQQgghhBBCCCGEEEIIIYQQQgghhBBCCCGEEEIIIYQQQgghhBBCCCGEEEIIIYQQQgghhBCyFOrLeI4eulAXSh2zWS6XW2bnTZhz9Kczs1UsFivP7eXgQQr1UbtiqPMYRbOkT0fNYmoxWDFHAYx8CHXBrKpqahniaY4KgmnYR1W12qavIxdC/fOqz/IYz0XnIDF+piXyINTPDZfP8niMGWeFgxPqphdvXdRUh464f6FuehZwE5GqUfcu1M/ogJNGLW0hSoosK9IsexeOqrTClFrZ6FOU8eV1t3c6y5+uPH6a5icbof5MDSTE9voiKsprr3aU35SjEyu/sxDqJYMemFKrT2v78/LqKH/kLyefWAiDlJAQz72LKI27J359RBh6Eb261LWo+xOWvTv0+Mq/j4SBUC8F8ZEYJS/ga40KyETYDlRCUkSPNVG5oASyEBZaQYWmSyg16FqUUQ2DTUMibLq2bvJ/tEAWQoF+uZ8Jy06hcnFCC2QjDAYk2xqnUDqlLiETYeAuddZQeV2WcLJt4UVYqIQ1D5XFLMzXrk6v/F1VWQiboV1LZxfSfO2lIcvyuMuJUO8EFZ6tCqV+zTrpWl+e/BNJfuFDKATaeJMYI0eTXs5O+mX+Iz9yb3ujMtmXBpuIasvRpMq15XkU5v9C8rF6sBDSPsKYx9Gk8+U+31v8TpMk1LgQBrnFJyUsOv+M3LWE3eUvUUnbN3FMhIGK6L495LiGwhP9oq+WXdvuxTxszP+FfQuwX6H+5v04eAOw6n59sbiWXs+KKMk+dnFshGRNpAQazsuMYF8PX2froZ87DUZCyttgT6DtulJ7EXja01gpnNMAvV/N8LovnRPbO1ZwdYHn6d5i2ag7Avm9P1wQfTXqBiC39/jLRvVxRV03B61w+pzGRtxaxU0VFHh91mbPtkbdApyuifw9L12t4sZG3dyi0yj9R+6eefsnbq3glDjm7r2FI+sb1Rdw8u6px927J39En0Dr/aHf9Z7N+0NnvBuVzEHf31/4eAecZ/kO2E30qCLlNzSK3ODpPb4r7kb13aKL8PUthpvY2RW4Gv6EjrlIMwcPRbgyF3etIJ/CyVxUwwLyKSSNOn08FeRjywMRCvpbq2oY1WaQj4IPQyjo+qhUetrdx68wvEAIIYQQQgghhBBCCCGEEEIIIYQQQgghhBBCCCGEEEIIIYQQQgghhBBCCCGEEEIIIYQQQgghhBBCCCGEEPIrTMRf+IMP4X10wm/y9hOKXpjMRifMjfdQRKcw8xAdcFJE9kRXDSMs4ZSo7FeY+T6MFJhIDC8kmWmUdxlbkr8GEQPJopgdvmeaj7YMc5H7EARBEARBEAQJnP8BDBk0jAadAoIAAAAASUVORK5CYII=" rel="icon" type="image/x-icon" />
    <!--X- Favicon CDN -X-->

    <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@0;1&display=swap" rel="stylesheet">
    <!-- X-Google Fonts-X -->

    <!-- Font Awsome CDN -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!--X- Font Awsome CDN -X-->

    <!-- External Stylesheet Link -->
        <link rel="stylesheet" href="style/style.css"/>
    <!--X- External Stylesheet Link -X-->
</head>
<body>