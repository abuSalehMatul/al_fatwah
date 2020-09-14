@extends('frontend.layouts.master')
@section('content')

<div class="main-section mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mb-4">
          <div class="new_answer mb-5">
            <h4 class="text-center mb-4">
              <i class="fas fa-feather-alt"></i> New Answers
            </h4>
            <new-answer></new-answer>
            <a href="{{route('new_answer_list')}}" style="float: right; color: #ed174b; font-weight: 600;">See more....</a>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="selected_answer">
            <h4 class="text-center mb-4" style="font-size: 20px;">
              Selected Questions
            </h4>
            <selected-question></selected-question>
            <a href="{{route('selected.answer')}}" style="float: right; color: #ed174b; font-weight: 600;">See more....</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="important_topics text-center mt-4 mb-5">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 col-md-12">
          <div class="section_heading text-center">
            <span>Welcome to</span>
            <h3>
              <i class="fas fa-exclamation-circle"></i> Important Topics
            </h3>
          </div>
        </div>
      </div>
      <category-with-short-list :app_local="'{{app()->getLocale()}}'"></category-with-short-list>
    </div>
  </div>
  <div class="tabs_topics mb-5">
    <div class="container">
      <!-- Nav tabs -->
      
    </div>
  </div>
  <div class="read-section mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mb-5">
          <div class="new_answer mb-5">
            <h4 class="text-center mb-4">
              <i class="fas fa-book-reader"></i> Most Read
            </h4>
              <most-read :app_local="'{{app()->getLocale()}}'"></most-read>
          </div>
        </div>
        <div class="col-md-4 mb-5">
          <div class="article_section">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#books">Books</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#article">Articles</a>
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div id="books" class="container tab-pane active">
                <br />
                 <book-list></book-list>
              </div>
              <div id="article" class="container tab-pane fade" style="overflow-y:scroll ">
                <br />
                <article-short :app_local="'{{app()->getLocale()}}'"></article-short>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
@endsection

@section('js')
<script>
  window.getCat = "{{ url('/').'/'.app()->getLocale().'/get-category'  }}";
</script>
@endsection