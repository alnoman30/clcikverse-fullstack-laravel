@extends('layouts.frontend.base')

@section('title', 'ClickVerse - ' . $blog->title)
@section('content')
    @include('layouts.frontend.partials.header_two')
    <!-- content
    ================================================== -->
    <section class="s-content">

        <div class="row">
            <div class="column large-12">

                <article class="s-content__entry format-standard">

                    <div class="s-content__media">
                        <div class="s-content__post-thumb">
                            <img src="{{ asset('uploads/blogs/' . $blog->feature_image) }}"
                                 srcset="{{ asset('uploads/blogs/' . $blog->feature_image) }} 2100w,
                                         {{ asset('uploads/blogs/' . $blog->feature_image) }} 1050w,
                                         {{ asset('uploads/blogs/' . $blog->feature_image) }} 525w" sizes="(max-width: 2100px) 100vw, 2100px" alt="">
                        </div>
                    </div> <!-- end s-content__media -->

                    <div class="s-content__entry-header">
                        <h1 class="s-content__title s-content__title--post">{{ $blog->title }}</h1>
                    </div> <!-- end s-content__entry-header -->

                    <div class="s-content__primary">

                        <div class="s-content__entry-content">

                            {!! $blog->description !!}





                        </div> <!-- end s-entry__entry-content -->

                        <div class="s-content__entry-meta">

                            <div class="entry-author meta-blk">
                                <div class="author-avatar">
                                    <img class="avatar" src="images/avatars/user-06.jpg" alt="">
                                </div>
                                <div class="byline">
                                    <span class="bytext">Posted By</span>
                                    <a href="#0">{{ $blog->user->name }}</a>
                                </div>
                            </div>

                            <div class="meta-bottom">

                                <div class="entry-cat-links meta-blk">
                                    <div class="cat-links">
                                        <span>In</span>
                                        <a href="#0">{{ $blog->category->name }}</a>
                                    </div>

                                    <span>On</span>
                                    {{ $blog->created_at->format('M d, Y') }}
                                </div>

                                <div class="entry-tags meta-blk">
                                    <span class="tagtext">Tags</span>
                                    @foreach ($blog->tags as $tag)
                                        <a href="#0">{{ $tag->name }}</a>
                                    @endforeach
                                </div>

                            </div>

                        </div> <!-- s-content__entry-meta -->

                        <div class="s-content__pagenav">
                            @if ($previous)
                            <div class="prev-nav">
                                <a href="{{ route('blog.singleblog', $previous->slug) }}" rel="prev">
                                    <span>Previous</span>
                                    {{ $previous->title }}
                                </a>
                            </div>

                            @endif
                            @if ($next)
                            <div class="next-nav">
                                <a href="{{ route('blog.singleblog', $next->slug) }}" rel="next">
                                    <span>Next</span>
                                    {{ $next->title }}
                                </a>
                            </div>
                            @endif
                         </div> <!-- end s-content__pagenav -->

                    </div> <!-- end s-content__primary -->
                </article> <!-- end entry -->

            </div> <!-- end column -->
        </div> <!-- end row -->


        <!-- comments
        ================================================== -->
        <div class="comments-wrap">

            <div id="comments" class="row">
                <div class="column large-12">

                    <h3>1 Comments</h3>

                    <!-- START commentlist -->
                    <ol class="commentlist">

                        <li class="depth-1 comment">

                            <div class="comment__avatar">
                                <img class="avatar" src="{{ asset('assets/frontend/images/avatars/user-01.jpg') }}" alt="" width="50" height="50">
                            </div>

                            <div class="comment__content">

                                <div class="comment__info">
                                    <div class="comment__author">Itachi Uchiha</div>

                                    <div class="comment__meta">
                                        <div class="comment__time">Oct 05, 2020</div>
                                        <div class="comment__reply">
                                            <a class="comment-reply-link" href="#0">Reply</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="comment__text">
                                <p>Adhuc quaerendum est ne, vis ut harum tantas noluisse, id suas iisque mei. Nec te inani ponderum vulputate,
                                facilisi expetenda has et. Iudico dictas scriptorem an vim, ei alia mentitum est, ne has voluptua praesent.</p>
                                </div>

                            </div>

                        </li>  <!-- end comment level 1 -->

                    </ol>
                    <!-- END commentlist -->

                </div> <!-- end col-full -->
            </div> <!-- end comments -->


            <div class="row comment-respond">

                <!-- START respond -->
                <div id="respond" class="column">

                    <h3>
                    Add Comment
                    <span>Your email address will not be published.</span>
                    </h3>

                    <form name="contactForm" id="contactForm" method="post" action="" autocomplete="off">
                        <fieldset>

                            <div class="form-field">
                                <input name="cName" id="cName" class="h-full-width h-remove-bottom" placeholder="Your Name" value="" type="text">
                            </div>

                            <div class="form-field">
                                <input name="cEmail" id="cEmail" class="h-full-width h-remove-bottom" placeholder="Your Email" value="" type="text">
                            </div>

                            <div class="form-field">
                                <input name="cWebsite" id="cWebsite" class="h-full-width h-remove-bottom" placeholder="Website" value="" type="text">
                            </div>

                            <div class="message form-field">
                                <textarea name="cMessage" id="cMessage" class="h-full-width" placeholder="Your Message"></textarea>
                            </div>

                            <br>
                            <input name="submit" id="submit" class="btn btn--primary btn-wide btn--large h-full-width" value="Add Comment" type="submit">

                        </fieldset>
                    </form> <!-- end form -->

                </div>
                <!-- END respond-->

            </div> <!-- end comment-respond -->

        </div> <!-- end comments-wrap -->


    </section> <!-- end s-content -->
@endsection
