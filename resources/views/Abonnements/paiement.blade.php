<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontOffice/assets/css/stripe.css') }}">

</head>
<body>
    <div class="formular">
        <h3>Formulaire de paiement par carte de crédit (STRIPE)</h3>
        <hr />
        <form action="{{ route('paiement.store') }}" method="POST" id="PaymentForm">
            @csrf 
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <input type="hidden" name="abonnement_id" value="{{ $abonnement->id }}">
          <fieldset class="row">
            <div class="form-group col-6">
              <label for="Firstname">Nom</label>
              <input type="text" size="35" name="nom" id="Firstname" value="" class="form-control">
              @error('nom')
                  <span class="invalid-feedback d-block" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group col-6">
              <label for="Lastname">Prenom</label>
              <input type="text" size="35" name="prenom" id="Lastname" class="form-control" value="">
              @error('prenom')
                  <span class="invalid-feedback d-block" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group col-6">
              <label for="E-Mail">E-Mail</label>
              <input type="text" size="35" name="email" id="E-Mail" value="" class="form-control">
              @error('email')
                  <span class="invalid-feedback d-block" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group col-6">
              <label for="Smount">Total (en DT)</label>
              <div class="input-group">
                
                <input type="hidden" size="35" name="amount" value="{{ $abonnement->prix }}" class="disabled form-control">
                <input type="text" size="35"  value="{{ $abonnement->prix }}" disabled class="disabled form-control">
              </div>
            </div>
          </fieldset>
      
          <div class="payment-errors bg-danger"></div>
          <fieldset>
            <div class="form-group col-6">
              <label>
                <span>Credit Card Number</span>
              </label>
              <input type="text" size="20" name="creditCard" data-stripe="number" class="form-control" placeholder="4242424242424242" value="" />
              @error('creditCard')
                  <span class="invalid-feedback d-block" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
      
            <div class="form-group form-group col-2">
              <label>
                <span>CVC Code:</span>
              </label>
              <input type="text" name="cvc" size="4" data-stripe="cvc" class="form-control" />
              @error('cvc')
                  <span class="invalid-feedback d-block" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
      
            <div class="form-group col-4">
              <div class="col-xs-12">
                <label>
                  <span>Date d'expiration de la carte<small> (MM/YY)</small>:</span>
                </label>
              </div>
              <div class="input-group">
                <input type="date" class="form-control" name="expiratedDate">
              </div>
              @error('expiratedDate')
                  <span class="invalid-feedback d-block" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
      
      
          </fieldset>
          <div class="center">
            <button type="submit" class="btn btn-success" />Submit</button>
          </div>
      
        </form>
      </div>
    <script src="{{ asset('boostrap/js/bootstrap.js') }}"></script>
      
</body>
</html>