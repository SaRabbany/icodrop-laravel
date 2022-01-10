<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>create page</title>
  </head>
  <body class="container mt-3">

      <a href="{{ route('admin') }}" type="button" class="btn btn-primary btn-sm">Back to Dashboard</a>


    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@foreach ($errors->all() as $error)

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ $error }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endforeach



    <div class="container my-3 p-3 bg-light">

        <form method="POST" action="{{ route('cards.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="row">

                <div class="col-sm-12 col-md-4">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                      </div>

                </div>


                <div class="col-sm-12 col-md-4">
                    <div class="mb-3">
                        <label for="serviceType" class="form-label">Service Type</label>
                        <input type="text" name="service_type" class="form-control" id="serviceType" required>
                      </div>

                </div>


                <div class="col-sm-12 col-md-4">
                    <div class="mb-3">
                        <label for="cardType" class="form-label">Card Type</label>
                        <select name="card_type" class="form-control" id="cardType" required>
                            <option value="Active">Active</option>
                            <option value="UpComing">UpComing</option>
                            <option value="Ended">Ended</option>
                            <option value="SandBox">SandBox</option>
                        </select>
                      </div>

                </div>
            </div>


            <div class="row">



                <div class="col-sm-12 col-md-6">
                    <div class="mb-3">
                        <label for="discription" class="form-label">Discription</label>
                        <textarea class="form-control" required name="discription" id="discription" cols="30" rows="2"></textarea>
                      </div>

                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="mb-3">
                        <label for="importanc_notice" class="form-label">Important Notice</label>
                        <textarea class="form-control" name="importand_notice" id="importanc_notice" cols="30" rows="2"></textarea>
                      </div>

                </div>

            </div>

            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="mb-3">
                        <label for="bannerImage" class="form-label">Banner Image</label>
                        <input type="file" class="form-control" name="banner_image" id="bannerImage" required>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="mb-3">
                        <label for="logo" class="form-label">Banner logo</label>
                        <input type="file" class="form-control" name="logo" id="bannerImage" required>
                    </div>

                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="mb-3">
                        <label for="role_of_token" class="form-label">Role Of Token</label>
                        <input type="text" class="form-control" name="role_of_token" id="role_of_token" required>
                    </div>

                </div>
            </div>




            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="mb-3">
                        <label for="sale_start" class="form-label">Sale Start</label>
                        <input type="datetime-local" class="form-control" name="sale_start" id="sale_start" required>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="mb-3">
                        <label for="sale_end" class="form-label">Sale End</label>
                        <input type="datetime-local" class="form-control" name="sale_end" id="sale_end" required>
                    </div>
                </div>
            </div>







            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="mb-3">
                        <label for="price" class="form-label">Total Received</label>
                        <input type="number" class="form-control" name="price" id="price" required>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="mb-3">
                        <label for="previous_price" class="form-label">Total Amount</label>
                        <input type="number" class="form-control" name="previous_price" id="previous_price" required>
                    </div>
                </div>


                <div class="col-sm-12 col-md-4">
                    <div class="mb-3">
                        <label for="ico_token_price" class="form-label">ICO Token Price</label>
                        <input type="text" class="form-control" name="ico_token_price" id="ico_token_price" required>
                    </div>
                </div>


            </div>




            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="mb-3">
                        <label for="ticker" class="form-label">Ticker</label>
                        <input type="text" class="form-control" name="ticker" id="ticker">
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="mb-3">
                        <label for="token_type" class="form-label">Token type</label>
                        <input type="text" class="form-control" name="token_type" id="token_type">
                    </div>
                </div>


                <div class="col-sm-12 col-md-4">
                    <div class="mb-3">
                        <label for="total_tokens" class="form-label">Total Tokens</label>
                        <input type="number" class="form-control" name="total_tokens" id="total_tokens">
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="mb-3">
                        <label for="website_link" class="form-label">Website Link</label>
                        <input type="url" class="form-control" name="website_link" id="website_link">
                    </div>
                </div>



                <div class="col-sm-12 col-md-4">
                    <div class="mb-3">
                        <label for="whitepaper" class="form-label">WhitePaper</label>
                        <input type="text" class="form-control" name="whitepaper" id="whitepaper">
                    </div>
                </div>






                <div class="col-sm-12 col-md-4">
                    <div class="mb-3">
                        <label for="usd_fund_goal" class="form-label">USDFundraising Goal</label>
                        <input type="text" class="form-control" name="usd_fund_goal" id="usd_fund_goal">
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="mb-3">
                        <label for="heart" class="form-label">Total Love </label>
                        <input type="number" class="form-control" name="heart" id="heart">

                    </div>
                </div>




            </div>




            <div class="row" id="screnshotappender">



            </div>


            <div class="buttonSection w-100 d-flex justify-content-end">
                <button type="button" class="btn btn-primary w-5" onclick="screnshotSectionAppender()">Add Screnshot</button>
            </div>


                <button type="submit" class="btn btn-success">Submit</button>
              </form>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>

        const screnshotSectionAppender = () =>{

            const firsthtml = `
                <label for="screenshotName" class="form-label">ScreenShot Name</label>
                <input type="text" class="form-control" name="screenshotName[]" id="screenshotName" required>

            `
             const secondHtml = `
                <label for="screenshots" class="form-label">ScreenShot</label>
                <input type="file" class="form-control" name="screenshots[]" id="screenshots" required>

        `
            // document.getElementById("screnshotappender").innerHTML = html;
            let firstDiv = document.createElement("div");
            firstDiv.className = "col-sm-12 col-md-6 mb-3"
            firstDiv.innerHTML = firsthtml

            let secondDiv = document.createElement("div");
            secondDiv.className = "col-sm-12 col-md-6 mb-3"
            secondDiv.innerHTML = secondHtml

           const appenderRowSection = document.getElementById("screnshotappender");
           appenderRowSection.appendChild(firstDiv);
           appenderRowSection.appendChild(secondDiv);

        }
    </script>



  </body>
</html>
