@extends('layouts.app')
  
  @extends('coordinator.sidemenu')
  
  @section('content')

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
      <div class="row">
        <ol class="breadcrumb">
          <li>
            <a href="#">
              <em class="fa fa-home"></em>
            </a>
          </li>
          <li class="active">FAQ</li>
        </ol>
      </div>
      <!--/.row-->

      <!-- message row -->
      <div class="row">
        <div class="container">
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div><br />
          @endif
        </div>
      </div>
      <!-- /message row -->

      <div class="row">
        <div class="col-lg-6">
          <h1 class="page-header">Frequently Asked Questions</h1>
        </div>
      </div>
      <!--/.row-->

      <div class="row">

        <div class="col-sm-12">

          <form method="post" enctype="multipart/form-data" class="form-horizontal" action="@if(!isset($faqs->id)){{ url('faq/add') }}@else{{ url('faq/edit/'.$faqs->id) }}@endif">
            {{csrf_field()}}
            <fieldset>
              <div class="form-group">
                <label for="question" class="col-sm-2 control-label">Questions</label>
                <div class="col-sm-10">
                  <div class="input text required">
                    <input type="text" name="question" class="form-control" id="question" required="required" value="@if(isset($faqs->question)){{ $faqs->question }}@endif">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="answer" class="col-sm-2 control-label">Answer</label>
                <div class="col-sm-10">
                  <div class="input textarea required">
                    <textarea name="answer" class="form-control" id="answer" required="required" rows="5">@if(isset($faqs->answer)){{ $faqs->answer }}@endif</textarea>
                  </div>
                </div>
              </div>
			        <div class="form-group">
                <label for="attachment" class="col-sm-2 control-label">Attachment</label>
                <div class="col-sm-10"> <input type="file" name="attachment" class="form-control" id="attachment">
                  @if(isset($faqs->attachment))
                    <img src="{{ url('/img/attachments/faqs/'.$faqs->attachment) }}" width="150" height="129" alt="no image found">
                  @else
                    <input type="file" name="attachment" class="form-control" id="attachment">
                  @endif
                </div>
              </div>
              <div class="form-group">
                <label for="is_publish" class="col-sm-2 control-label">Publish</label>
                <div class="col-sm-10">
                  <select name="publish" class="form-control" id="is_publish">
                    <option value="0" @if(isset($faqs->publish) && $faqs->publish == "0"){{ 'selected' }}@endif>Yes</option>
                    <option value="1" @if(isset($faqs->publish) && $faqs->publish == "1"){{ 'selected' }}@endif>No</option>
                  </select>
                </div>
              </div>
            </fieldset>

            <div class="form-group" style="margin-top: 80px;">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="action-fixed-bottom animated bounceInUp">
                  <button name="save" value="save" class="btn btn-success" type="submit"><i class="fa fa-save"></i> Save</button>
                  <a href="{{ url('/coordinator/faq') }}" class="btn btn-warning"><i class="fa fa-angle-left"> </i> Back To list</a> </div>
              </div>
            </div>

          </form>

        </div>
      </div>
    </div>
  @endsection