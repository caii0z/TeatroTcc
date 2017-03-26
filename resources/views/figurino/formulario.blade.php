

	@extends('layouts.app')
	@section('content')   

                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <div class="panel-title">Form Login</div>
                        </div>
                        <div class="panel-body">
                           <div class="form-group">
                              <label class="control-label">Email Address *</label>
                              <input type="text" name="email" required class="form-control">
                           </div>
                           <div class="form-group">
                              <label class="control-label">Password *</label>
                              <input type="password" name="password" required class="form-control">
                           </div>
                           <div class="required">* Required fields</div>
                        </div>
                        <div class="panel-footer">
                           <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                     </div>
    @endsection