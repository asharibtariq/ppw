@extends('main_layouts.app')
@section('main_content')
<style>
.publicationbox {
    padding: 50px;
    margin: 2%;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
min-height: 422px}
</style>
    <div id="page-header">
        <div class="section-bg" style="background-image:url(img/background-2.jpg)"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-content">
                        <h1>Publications</h1>
                        <ul class="breadcrumb">
                            <li><a href="{{url('')}}">Home</a></li>
                            <li><a href="#">Publications</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">

                <main id="main" class="col-md-12">
                    <div class="article causes-details">

                        <div class="article-content">

                            <h2 class="article-title text-center">Publications</h2>

                            <hr>
                            @php
                                $publication = json_decode($publication)
                            @endphp
                            <?php
                            if (!empty($publication)){
                            $i = 0;
                            foreach ($publication as $publication_row){
                            $publication_description = strlen($publication_row->description) > 190 ? substr($publication_row->description, 0, 190) . "..." : $publication_row->description;
                            ?>
                            <div class="col-md-4 publicationbox" >


                                    <h3>
                                        <a href="#">{{$publication_row->title}}</a>
                                    </h3>
                                    <p>{{$publication_description}}</p>


                                <a href="{{asset('uploads/publication/'.$publication_row->document)}}"
                                   class="primary-button" target="_blank">Download pdf</a>
                            </div>
                            <?php
                            $i++;
                            ?>
                            <?php
                            }
                            }
                            ?>


                        </div>
                    </div>


                </main>
            </div>
        </div>
    </div>

@endsection