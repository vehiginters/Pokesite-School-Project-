@extends('layouts.app')

@section('content')
<div class="text-center mt-5 pt-3 pb-3" style="background-color:#c96e79 ">
  <p class="lead">Attention! To post your own pokemon you must be <a href="/login">logged in</a></p>
</div>
<div class="container mt-5">
<div class="row">
  <div class="col-md-3">
  </div>
<div class="col-md-6">
    <div class="form-area">
        <form role="form">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Submit Form</h3>
    				<div class="form-group">
              <label for="pokeimg">Pokemon image</label>
              <input type="file" class="form-control-file" id="pokeimg" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="pokename" name="email" placeholder="Pokemon Name" required>
					</div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="description" placeholder="Description" maxlength="140" rows="7" required></textarea>
                    </div>

        <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
        </form>
    </div>
</div>
<div class="col-md-3">
</div>
</div>
</div>
<form>
  <div class="form-group text-center" style="position:absolute;left:30%;">

  </div>
</form>
@endsection
