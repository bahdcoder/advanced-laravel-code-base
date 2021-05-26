@extends('forum.layouts.main')

@section('content')
    <div class="container-xl mt-6 clearfix">
        <div class="d-flex flex-wrap">
            <form class="col-5" action="">
                <input class="form-control input-block" type="text" placeholder="Search discussions"
                    aria-label="search discussion forum" />
            </form>
            <div class="col-7 d-flex flex-justify-between">
                <div class="BtnGroup d-block px-3">
                    <button class="BtnGroup-item btn btn-outline" type="button">Unanswered</button>
                    <button class="BtnGroup-item btn btn-outline" type="button" aria-selected="true">Answered</button>
                </div>

                <div>
                    <button class="btn btn-primary" type="button" aria-disabled="false">New discussion</button>
                </div>
            </div>
        </div>

        <div class="d-flex flex-wrap mt-4">
            <div class="col-3">
                <h4 class="mb-2">Categories</h4>
                <ul class="filter-list">
                    <li class="filter-item">
                        🙏 View all
                    </li>
                    <li class="filter-item selected">
                        🐙 General
                    </li>
                </ul>
            </div>

            <div class="col-9 pl-4">
                <div class="flex-1 mt-sm-n3" data-discussion-hovercards-enabled="">
                    <div class="Box-row Box-row--focus-gray px-0 mt-0">
                        <div class="Box-row--drag-hide position-relative">
                            <div class="d-flex flex-auto flex-items-start">
                                <div class="d-flex flex-items-center">
                                    <div style="width:56px;" class="flex-shrink-0 ml-n2 mr-2 >mt-n1"
                                        data-replace-remote-form-target="">
                                        <div data-url="/" data-upvoted="true"
                                            class="text-center discussion-vote-form position-relative is-upvoted">
                                            <div class="js-upvote-error dropdown-menu dropdown-menu-ne p-3 text-small anim-scale-in mb-2"
                                                hidden="" style="width: auto;left:10px;white-space:nowrap;">
                                            </div>
                                            <button type="button"
                                                class="js-upvote-button upvote-button btn-link discussion-vote"
                                                aria-label="Upvote" data-disable-with="">
                                                <svg width="15" height="16"
                                                    class="octicon octicon-arrow-up width-full discussion-upvote-icon"
                                                    viewBox="0 0 16 16" version="1.1" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M3.47 7.78a.75.75 0 010-1.06l4.25-4.25a.75.75 0 011.06 0l4.25 4.25a.75.75 0 01-1.06 1.06L9 4.81v7.44a.75.75 0 01-1.5 0V4.81L4.53 7.78a.75.75 0 01-1.06 0z">
                                                    </path>
                                                </svg>
                                            </button>
                                            <div class="d-flex flex-justify-center width-full">
                                                <div class="Counter Counter--secondary discussion-vote-count d-flex flex-row"
                                                    style="min-width:26px;">
                                                    <div style="height: 1.5em; overflow: hidden;" class="width-full">
                                                        <div class="slidey-boi d-flex flex-column">
                                                            <span class="js-default-vote-count" aria-hidden="true">
                                                                1</span>
                                                            <span class="js-upvoted-vote-count" aria-hidden="false">2</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="d-flex flex-justify-center flex-items-center bg-discussions-row-emoji-box rounded-2 flex-shrink-0">
                                        <span class="d-flex flex-items-center tooltipped tooltipped-e color-text-tertiary">
                                            💡
                                        </span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-sm-row flex-auto">
                                    <div class="lh-condensed pl-2 pr-3 flex-1">
                                        <a href=""
                                            class="Link--primary v-align-middle no-underline h4 break-word discussion-Link--primary d-inline-block mr-1">
                                            Support Typescript with ts-node on dev time :)
                                        </a>


                                        <div class="text-small color-text-secondary mt-1">
                                            <a class="Link--muted" title="Discussion created by dominguezcm"
                                                href="/">dominguezcm</a>

                                            started
                                            <span class="no-wrap">on 3 Mar</span>
                                            <span> in </span>
                                            <a class="Link--muted"
                                                href="/tenseijs/tensei/discussions/categories/ideas">Ideas</a>
                                            <span class="text-bold">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="pt-2 pl-2 pl-md-0 pr-3 d-flex flex-shrink-0 flex-items-center">
                                        <div class="d-flex flex-justify-end mr-1 mr-md-0">
                                            <div class="d-none d-md-block AvatarStack AvatarStack--right AvatarStack--two">

                                                <div class="AvatarStack-body" aria-label="dominguezcm and Kati Frantz">
                                                    <a class="avatar avatar-user" aria-label="bahdcoder's profile" href="/">
                                                        <img class="from-avatar avatar-user"
                                                            src="https://avatars.githubusercontent.com/u/43208001?s=40&amp;v=4"
                                                            width="20" height="20" alt="@dominguezcm">
                                                    </a> <a class="avatar avatar-user" href="/bahdcoder">
                                                        <img class="from-avatar avatar-user"
                                                            src="https://avatars.githubusercontent.com/u/19477966?s=40&amp;v=4"
                                                            width="20" height="20" alt="@bahdcoder">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-md-none AvatarStack AvatarStack--two">

                                                <div class="AvatarStack-body" aria-label="dominguezcm and Kati Frantz">
                                                    <a class="avatar avatar-user" href="/">
                                                        <img class="from-avatar avatar-user"
                                                            src="https://avatars.githubusercontent.com/u/43208001?s=40&amp;v=4"
                                                            width="20" height="20" alt="@dominguezcm">
                                                    </a> <a class="avatar avatar-user" href="/">
                                                        <img class="from-avatar avatar-user"
                                                            src="https://avatars.githubusercontent.com/u/19477966?s=40&amp;v=4"
                                                            width="20" height="20" alt="@bahdcoder">
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="no-wrap ml-2 text-right" style="width: 60px;">
                                            <a href="" class="Link--muted">
                                                <svg class="octicon octicon-comment mr-1" height="16" viewBox="0 0 16 16"
                                                    version="1.1" width="16" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M2.75 2.5a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h2a.75.75 0 01.75.75v2.19l2.72-2.72a.75.75 0 01.53-.22h4.5a.25.25 0 00.25-.25v-7.5a.25.25 0 00-.25-.25H2.75zM1 2.75C1 1.784 1.784 1 2.75 1h10.5c.966 0 1.75.784 1.75 1.75v7.5A1.75 1.75 0 0113.25 12H9.06l-2.573 2.573A1.457 1.457 0 014 13.543V12H2.75A1.75 1.75 0 011 10.25v-7.5z">
                                                    </path>
                                                </svg>1
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border-top">
                    <div class="paginate-container">
                        <div class="pagination">
                            <div role="navigation" aria-label="Pagination" class="pagination">
                                <span class="previous_page disabled">Previous</span>
                                <em class="current" data-total-pages="56">1</em>
                                <a rel="next" aria-label="Page 2" href="">2</a>
                                <a aria-label="Page 3" href="/">3</a>
                                <a aria-label="Page 4" href="">4</a>
                                <a aria-label="Page 5" href="">5</a>
                                <span class="gap">…</span> <a aria-label="Page 55" href="">55</a>
                                <a aria-label="Page 56" href="">56</a>
                                <a class="next_page" rel="next" href="">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
