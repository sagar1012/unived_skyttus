<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <?php include("include/require_css.php"); ?>
  <style>
    .form-select {
      display: block;
      width: 40%;
      font-size: 1rem;
      font-family: Myriad Pro, Regular;
      line-height: 1.5;
      color: grey;
      background-color: #fff;
      border: 1px solid #ced4da;
      border-radius: 0.25rem;
    }

    .td {
      top: 581px;
      left: 1182px;
      width: 60px;
      height: 19px;
      font-size: 15px;
      text-align: right;
      font: normal normal normal 18px/26px Myriad Pro;
      letter-spacing: 0px;
      color: #000000;
      opacity: 1;
    }

    .th {
      top: 479px;
      left: 379px;
      width: 111px;
      height: 19px;
      text-align: left;
      font: normal normal 600 18px/26px Myriad Pro;
      letter-spacing: 0px;
      color: #000000;
      opacity: 1;
    }

    .img {
      width: 50%;
    }

    .header-left {
      top: 161px;
      left: 352px;
      width: 32px;
      height: 15px;
      text-align: left;
      font: normal normal normal 14px/21px Myriad Pro;
      letter-spacing: 0.56px;
      color: #666666;
      opacity: 1;
    }

    .titlemb-0 {
      top: 273px;
      left: 279px;
      width: 219px;
      height: 43px;
      text-align: left;
      font: normal normal 600 42px/42px Myriad Pro;
      letter-spacing: 0px;
      color: #231F20;
      opacity: 1;
    }

    table th,
    table td {
      padding-left: 10px;
      padding: 20px;
    }

    .Available {
      color: #67A746
    }

    .outofstock {
      color: #FF0000
    }

    .fa-stack[data-count]:after {
      position: absolute;
      right: 0%;
      top: 1%;
      content: attr(data-count);
      font-size: 30%;
      padding: .6em;
      border-radius: 999px;
      color: white;
      background: rgba(255, 0, 0, .85);
      text-align: center;
      min-width: 2em;
      font-weight: bold;
    }

    .notification {
      text-decoration: none;
      padding: 15px 26px;
      position: relative;
      display: inline-block;
      border-radius: 2px;
    }

    .notification .badge {
      position: absolute;
      top: 0px;
      margin-top: 5px;
      right: 20px;
      padding: 5px 8px;
      border-radius: 50%;
      background: #90B83E;
      color: white;
    }

    .selection2 {
      margin-left: 10px;
    }

    .Search {
      position: absolute;
      right: 10px;
      margin-top: 10px;
    }

    /* date 5-1-2022 */
    .quickorder-table td img {
      width: 70px;
    }

    .quickorder-table td {
      padding: 40px 0;
    }

    .quickorder-table td input {
      border: 1px solid #ddd;
      text-align: center;
      border-radius: 3px;
      height: 35px;
      outline: none;
    }

    .quickorder-table .form-control {
      min-height: 45px;
    }

    table.quickorder-table tr th,
    .table>:not(:last-child)>:last-child>* {
      padding: 10px 0;
      border-bottom-color: #ddd !important;
    }

    /* date 6-1-2022 */
    table.quickorder-table tr:last-child td {
      border-bottom: 0px;
    }

    /* date 13-01-2022 */
    .form-control.rounded {
      min-height: 50px;
    }

    @media only screen and (max-width: 768px) {
      .header-left {
        margin-left: 20px !important;
      }

      .form-select {
        width: auto;
        font-size: 8px;
      }

      .selection2 {
        margin-left: 0px;
      }
    }

    @media only screen and (min-width: 768px) {
      .top-bar.text-center {
        font-size: 11px;
      }
    }

    @media(max-width:600px) {
      .section-products {
        padding-left: 20px;
        padding-right: 20px;
      }
    }

    @media(max-width:480px) {
      .search-box.d-flex {
        display: block !important;
      }

      .search-box button.form-control {
        margin-top: 15px;
      }
    }
  </style>
</head>

<body>

  <?php include("include/header.php"); ?>

  <section class="section-products">
    <div class="container">
      <div class="header-left" style="width: fit-content;padding-top: 10px;">
        <a class="active" href="#home">Home /</a>
        <a href="#Shop">Shop / </a>
        <a href="#Quick Order" style="color: #90B83E">Quick Order</a>
      </div>
    </div>
    <div class="container mt-30">

      <div class="border-above-title" style="margin-top: 70px;"><span class=""></span></div>
      <div>
        <div>

          <h1 class="title mb-0"> Quick Order</span></h1>

        </div>
      </div>

      <div class="search-box d-flex justify-content-between mt-5">
        <div class="input-group me-3">
          <input type="text" class="form-control rounded" placeholder="Search Product...">
          <div class="Search">
            <i class="fa fa-search"></i>
          </div>
        </div>
        <a href="../unived/MyCart.php">
          <button class="form-control ml-3 text-white" style="width: 200px; background: #90B83E; min-height: 50px;">Add to Cart (3)</button></a>
      </div>


      <div class="row">
        <div class="col-sm-12">


          <br>
          <hr class="mt-4 mb-0">

          <div class="table-responsive">
            <table class="table quickorder-table align-middle">
              <thead>
                <tr>

                  <th scope="col"></th>
                  <th scope="col">Product Name</th>
                  <th scope="col"></th>
                  <th scope="col">Price</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><img src="assets/img/Quickorder/India-Unived-KSM66-Organic-Ashwagandha-30-Caps-Front-1.png" class="rounded float-left">
                  </td>
                  <td>
                    KSM66-Organic-Ashwagandha
                    <select class="form-select mt-2">
                      <option selected>Select Variation</option>
                      <option value="1">Variation One</option>
                      <option value="2">Variation Two</option>
                      <option value="3">Variation Three</option>
                    </select>
                  </td>
                  <td></td>
                  <td><span>&#8377;600.00</span></td>
                  <td><input type="number" value="2" min="0" max="10"></td>
                  <td class="Available">Available</td>
                </tr>
                <tr>

                  <td><img src="assets/img/quickorder/MENOPAUSE-MANAGEMENT-FRONT@2x.png" class="rounded float-left"></td>
                  <td>Menopause-Managment</td>
                  <td></td>
                  <td><span>&#8377;600.00</span></td>
                  <td><input type="number" value="2" min="0" max="10"></td>
                  <td class="Available">Available</td>
                </tr>
                <tr>

                  <td><img src="assets/img/Quickorder/India-CALM-Ashwagandha-L-Theanine-60-Caps-Front.png" class="rounded float-left"></td>
                  <td>Clam</td>
                  <td></td>
                  <td><span>&#8377;600.00</span></td>
                  <td><input type="number" value="2" min="0" max="10"></td>
                  <td class="Available">Available</td>
                </tr>
                <tr>

                  <td><img src="assets/img/Quickorder/India-Unived-KSM66-Organic-Ashwagandha-30-Caps-Front-1.png" class="rounded float-left"></td>
                  <td>
                    KSM66-Organic-Ashwagandha

                    <div class="d-flex">
                      <select class="form-select mt-2">
                        <option selected>Select Variation</option>
                        <option value="1">Variation One</option>
                        <option value="2">Variation Two</option>
                        <option value="3">Variation Three</option>
                      </select>

                      <select class="form-select selection2 mt-2">
                        <option selected>Select Flavours</option>
                        <option value="1">Variation One</option>
                        <option value="2">Variation Two</option>
                        <option value="3">Variation Three</option>
                      </select>
                    </div>
                  <td>
                  </td>
                  <td><span>&#8377;600.00</span></td>
                  <td><input type="number" value="2" min="0" max="10"></td>
                  <td class="Available">Available</td>
                </tr>

                <tr>
                  <td><img src="assets/img/Quickorder/MENOPAUSE-MANAGEMENT-FRONT@2x.png" class="rounded float-left">
                  </td>
                  <td>
                    Menopause-Managment
                    <select class="form-select mt-2">
                      <option selected>Select Flavours</option>
                      <option value="1">Variation One</option>
                      <option value="2">Variation Two</option>
                      <option value="3">Variation Three</option>
                    </select>
                  </td>
                  <td></td>
                  <td><span>&#8377;600.00</span></td>
                  <td><input type="number" value="2" min="0" max="10"></td>
                  <td class="outofstock">Out of Stock</td>
                </tr>
                <tr>
                  <td><img src="assets/img/Quickorder/India-Unived-KSM66-Organic-Ashwagandha-30-Caps-Front-1.png" class="rounded float-left">
                  </td>
                  <td>
                    KSM66-Organic-Ashwagandha
                    <select class="form-select mt-2">
                      <option selected>Select Variation</option>
                      <option value="1">Variation One</option>
                      <option value="2">Variation Two</option>
                      <option value="3">Variation Three</option>
                    </select>
                  </td>
                  <td></td>
                  <td><span>&#8377;600.00</span></td>
                  <td><input type="number" value="2" min="0" max="10"></td>
                  <td class="Available">Available</td>
                </tr>
                <tr>

                  <td><img src="assets/img/quickorder/MENOPAUSE-MANAGEMENT-FRONT@2x.png" class="rounded float-left"></td>
                  <td>Menopause-Managment</td>
                  <td></td>
                  <td><span>&#8377;600.00</span></td>
                  <td><input type="number" value="2" min="0" max="10"></td>
                  <td class="Available">Available</td>
                </tr>
                <tr>

                  <td><img src="assets/img/Quickorder/India-CALM-Ashwagandha-L-Theanine-60-Caps-Front.png" class="rounded float-left"></td>
                  <td>Clam</td>
                  <td></td>
                  <td><span>&#8377;600.00</span></td>
                  <td><input type="number" value="2" min="0" max="10"></td>
                  <td class="Available">Available</td>
                </tr>
                <tr>


                  <td><img src="assets/img/Quickorder/India-Unived-KSM66-Organic-Ashwagandha-30-Caps-Front-1.png" class="rounded float-left">
                  </td>
                  <td>
                    KSM66-Organic-Ashwagandha
                    <select class="form-select mt-2">
                      <option selected>Select Variation</option>
                      <option value="1">Variation One</option>
                      <option value="2">Variation Two</option>
                      <option value="3">Variation Three</option>
                    </select>
                  </td>
                  <td></td>
                  <td><span>&#8377;600.00</span></td>
                  <td><input type="number" value="2" min="0" max="10"></td>
                  <td class="Available">Available</td>
                </tr>
                <tr>

                  <td><img src="assets/img/quickorder/MENOPAUSE-MANAGEMENT-FRONT@2x.png" class="rounded float-lef"></td>
                  <td>Menopause-Managment</td>
                  <td></td>
                  <td><span>&#8377;600.00</span></td>
                  <td><input type="number" value="2" min="0" max="10"></td>
                  <td class="Available">Available</td>
                </tr>
                <tr>

                  <td><img src="assets/img/Quickorder/India-CALM-Ashwagandha-L-Theanine-60-Caps-Front.png" class="rounded float-left"></td>
                  <td>Clam</td>
                  <td></td>
                  <td><span>&#8377;600.00</span></td>
                  <td><input type="number" value="2" min="0" max="10"></td>
                  <td class="Available">Available</td>
                </tr>
                <tr>
                  <td><img src="assets/img/Quickorder/India-Unived-KSM66-Organic-Ashwagandha-30-Caps-Front-1.png" class="rounded float-left"></td>
                  <td>
                    KSM66-Organic-Ashwagandha

                    <div class="row pl-0" style="margin-left: -2px;">
                      <select class="form-select mt-2">
                        <option selected>Select Variation</option>
                        <option value="1">Variation One</option>
                        <option value="2">Variation Two</option>
                        <option value="3">Variation Three</option>
                      </select>
                      <select class="form-select selection2 mt-2">
                        <option selected>Select Flavours</option>
                        <option value="1">Variation One</option>
                        <option value="2">Variation Two</option>
                        <option value="3">Variation Three</option>
                      </select>
                    </div>
                  <td>

                  </td>
                  <td><span>&#8377;600.00</span></td>
                  <td><input type="number" value="2" min="0" max="10"></td>
                  <td class="Available">Available</td>
                </tr>
                <tr>
                  <td><img src="assets/img/Quickorder/MENOPAUSE-MANAGEMENT-FRONT@2x.png" class="rounded float-left">
                  </td>
                  <td>
                    Menopause-Managment
                    <select class="form-select mt-2">
                      <option selected>Select Flavours</option>
                      <option value="1">Variation One</option>
                      <option value="2">Variation Two</option>
                      <option value="3">Variation Three</option>
                    </select>
                  </td>
                  <td></td>
                  <td><span>&#8377;600.00</span></td>
                  <td><input type="number" value="2" min="0" max="10"></td>
                  <td class="Available">Available</td>
                </tr>



              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    </div>

  </section>


  <section class="section-subscribe mt-40">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-5">
          <h4 class="color-main mb-0 font-semibold font-size-26px ">Knowledge to Your Inbox</h4>
          <p class="mb-0 fw-lighter">Stay updated about new products and discount offers, news, podcasts &amp; more, delivered to your inbox each month.</p>
        </div>
        <div class="col-md-5 offset-md-2">
          <div class="row">
            <div class="col-md-9 col-8">
              <input type="email" placeholder="Email address *" required="" class="form-control mt-md-0 mt-2">
            </div>
            <div class="col-md-3 col-4">
              <button class="btn btn-theme mt-md-0 mt-2">Subscribe</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php include("include/footer.php"); ?>
  <?php include("include/require_js.php"); ?>






</body>

</html>