@extends('layouts.app')
@section('content')
<div class="row container">
    <div class="col-md-12">
   
    <form action="{{ url('cafes/update') }}" method="POST">

        <!-- item_name -->
        <div class="form-group">
           <label for="item_name">Title</label>
           <input type="text" name="item_name" class="form-control" value="{{$cafeterians->item_name}}">
        </div>
        <!--/ item_name -->
        
        
         <!-- item_text -->
        <div class="form-group">
           <label for="item_text">Text</label>
           <input type="text" name="item_text" class="form-control" value="{{$cafeterians->item_text}}">
        </div>
        <!--/ item_text -->
        
        
        <!-- item_number -->
        <div class="form-group">
           <label for="item_number">Number</label>
        <input type="text" name="item_number" class="form-control" value="{{$cafeterians->item_number}}">
        </div>
        <!--/ item_number -->

        <!-- item_amount -->
        <div class="form-group">
           <label for="item_amount">Amount</label>
        <input type="text" name="item_amount" class="form-control" value="{{$cafeterians->item_amount}}">
        </div>
        <!--/ item_amount -->
        
        <!-- published -->
        <div class="form-group">
           <label for="published">published</label>
            <input type="datetime" name="published" class="form-control" value="{{$cafeterians->published}}"/>
        </div>
        <!--/ published -->
        
        <!-- published -->
        <div class="form-group">
           <label for="published">published</label>
            <input type="file" name="filename" class="form-control" value="{{$cafeterians->item_img}}"/>
        </div>
        
        <!-- Saveボタン/Backボタン -->
        <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link pull-right" href="{{ url('/') }}">
                Back
            </a>
        </div>
        <!--/ Saveボタン/Backボタン -->
         
         <!-- id値を送信 -->
         <input type="hidden" name="id" value="{{$cafeterians->id}}">
         <!--/ id値を送信 -->
         
         <!-- CSRF -->
         @csrf
         <!--/ CSRF -->
         
    </form>
    </div>
</div>
@endsection