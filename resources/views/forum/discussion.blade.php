@extends('forum.layouts.main')


@section('content')
    <div class="container-xl px-3 px-md-4 px-lg-5 my-6">
        <div id="repo-content-pjax-container" class="repository-content ">
            <div class="js-check-all-container">
                <div class="clearfix js-issues-results">
                    <div id="partial-discussion-header">
                        <div class="gh-header-show gh-header-no-access">
                            <div class="d-flex flex-column flex-md-row flex-items-start">
                                <div class="d-flex width-full flex-order-1 flex-md-order-none">
                                    <div class="mt-2">

                                        <div style="width:56px;" class="flex-shrink-0 ml-n2 mr-2 >mt-n1">
                                            <div class="text-center discussion-vote-form position-relative ">
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
                                                                <span class="js-default-vote-count" aria-hidden="false">
                                                                    1</span>
                                                                <span class="js-upvoted-vote-count"
                                                                    aria-hidden="true">2</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="d-flex flex-column">
                                        <h1 class="gh-header-title flex-auto break-word f1 mr-0">
                                            <span class="js-issue-title">
                                                PurgeCSS doesn't safelist properly
                                            </span>
                                            <span class="gh-header-number f1-light">#2961</span>
                                        </h1>
                                        <div class="d-flex flex-wrap flex-items-center mb-3 mt-2">
                                            <span title="Answered" class="border State color-bg-primary mr-2">
                                                <svg class="octicon octicon-check-circle-fill color-text-success"
                                                    height="16" viewBox="0 0 16 16" version="1.1" width="16"
                                                    aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M8 16A8 8 0 108 0a8 8 0 000 16zm3.78-9.72a.75.75 0 00-1.06-1.06L6.75 9.19 5.28 7.72a.75.75 0 00-1.06 1.06l2 2a.75.75 0 001.06 0l4.5-4.5z">
                                                    </path>
                                                </svg>
                                                <a class="Link--secondary d-inline-block text-bold js-discussions-goto-answer-button ml-1"
                                                    href="#discussioncomment-143357">
                                                    Answered
                                                </a>
                                                <span class="color-text-secondary">by</span>
                                                <a class="Link--secondary text-bold">bahdcoder</a>

                                            </span>
                                            <div class="color-text-secondary my-1">
                                                <a href="/bahdcoder" class="Link--secondary text-bold d-inline-block">
                                                    <span>bahdcoder</span>
                                                </a>

                                                asked this question in
                                                <a class="text-inherit text-bold" href="/">Help</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="discussion_bucket" class="gutter-condensed gutter-lg flex-column flex-md-row d-flex">

                    <div class="flex-shrink-0 col-12 col-md-9 mb-4 mb-md-0">
                        <div class="js-quote-selection-container js-discussion-quote-selection">

                            <div class="discussion js-discussion js-socket-channel js-updatable-content answered">
                                <div class="TimelineItem pt-0 js-comment-container discussion-timeline-item ml-0">
                                    <div class="discussions-timeline-scroll-target" id="discussion-38686">
                                        <div class="
                                        timeline-comment-group
                                        discussion-comment
                                        js-discussion-comment
                                        js-minimizable-comment-group
                                        js-targetable-element
                                        TimelineItem-body
                                        js-timeline-discussion-comment my-1
                                      ">


                                            <div class="d-flex">
                                                <div class="width-full" style="">
                                                    <div
                                                        class="discussion-comment timeline-comment unminimized-comment comment previewable-edit js-task-list-container flex-auto box-shadow-none js-comment reorderable-task-lists">
                                                        <div class="edit-comment-hide">
                                                            <div
                                                                class="clearfix d-flex px-3 flex-row-reverse flex-items-center">
                                                                <h3
                                                                    class="timeline-comment-header-text f5 text-normal d-flex pb-0 flex-items-baseline pt-2">

                                                                    <div
                                                                        class="avatar-parent-child flex-column flex-items-center">
                                                                        <a class="d-inline-block" href="/bahdcoder"><img
                                                                                class="avatar rounded-1 mr-2 avatar-user"
                                                                                src="https://avatars.githubusercontent.com/u/2189038?s=60&amp;v=4"
                                                                                width="30" height="30" alt="@bahdcoder"></a>
                                                                    </div>

                                                                    <a href="/bahdcoder"
                                                                        class="author text-bold Link--primary css-truncate css-truncate-target width-fit lh-condensed">
                                                                        bahdcoder
                                                                    </a>
                                                                    <a href="#discussion-38686"
                                                                        id="discussion-38686-permalink"
                                                                        class="Link--secondary js-timestamp d-inline-block ml-2">
                                                                        <relative-time datetime="2020-12-01T09:13:20Z"
                                                                            class="no-wrap" title="1 Dec 2020, 10:13 GMT+1">
                                                                            on 1 Dec 2020</relative-time>
                                                                    </a>


                                                                    <div class="d-none d-sm-inline-flex ml-2">


                                                                    </div>

                                                                </h3>
                                                            </div>
                                                        </div>


                                                        <div class="">
                                                            <div class="edit-comment-hide">
                                                                <div class="p-3">
                                                                    Lorem ipsum dolor sit amet consectetur, adipisicing
                                                                    elit. Dolores voluptatem officia totam optio saepe
                                                                    beatae at labore voluptate, quas unde quo dolor autem
                                                                    harum repellat quis modi excepturi maxime est.
                                                                </div>
                                                                <div
                                                                    class="d-flex flex-justify-between flex-content-center">


                                                                    <div
                                                                        class="comment-reactions d-flex flex-items-start flex-row-reverse js-reactions-container js-reaction-buttons-container flex-justify-end">
                                                                        <form class="js-pick-reaction" action="/"
                                                                            accept-charset="UTF-8" method="post">
                                                                            <div
                                                                                class="comment-reactions-options js-comment-reactions-options">
                                                                            </div>
                                                                        </form>

                                                                        <details
                                                                            class="details-overlay details-reset dropdown hx_dropdown-fullscreen position-relative d-inline-block reaction-popover-container reactions-menu js-reaction-popover-container js-comment-header-reaction-button">
                                                                            <summary
                                                                                class="add-reaction-btn btn-sm Link--secondary discussion-add-reaction-button mb-3 mr-3 color-bg-tertiary border color-border-primary rounded-2"
                                                                                aria-label="Add your reaction"
                                                                                aria-haspopup="menu" role="button">
                                                                                <svg height="18"
                                                                                    class="octicon octicon-smiley"
                                                                                    viewBox="0 0 16 16" version="1.1"
                                                                                    width="18" aria-hidden="true">
                                                                                    <path fill-rule="evenodd"
                                                                                        d="M1.5 8a6.5 6.5 0 1113 0 6.5 6.5 0 01-13 0zM8 0a8 8 0 100 16A8 8 0 008 0zM5 8a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zM5.32 9.636a.75.75 0 011.038.175l.007.009c.103.118.22.222.35.31.264.178.683.37 1.285.37.602 0 1.02-.192 1.285-.371.13-.088.247-.192.35-.31l.007-.008a.75.75 0 111.222.87l-.614-.431c.614.43.614.431.613.431v.001l-.001.002-.002.003-.005.007-.014.019a1.984 1.984 0 01-.184.213c-.16.166-.338.316-.53.445-.63.418-1.37.638-2.127.629-.946 0-1.652-.308-2.126-.63a3.32 3.32 0 01-.715-.657l-.014-.02-.005-.006-.002-.003v-.002h-.001l.613-.432-.614.43a.75.75 0 01.183-1.044h.001z">
                                                                                    </path>
                                                                                </svg>
                                                                            </summary>

                                                                            <details-menu
                                                                                class="js-add-reaction-popover anim-scale-in dropdown-menu dropdown-menu-se "
                                                                                aria-label="Pick your reaction"
                                                                                style="width: 150px" role="menu">
                                                                                <div class="js-pick-reaction"
                                                                                    accept-charset="UTF-8" method="post">
                                                                                    <p
                                                                                        class="color-text-secondary mx-2 my-1 js-reaction-description">
                                                                                        Pick your reaction</p>

                                                                                    <div role="none"
                                                                                        class="dropdown-divider"></div>

                                                                                    <div
                                                                                        class="clearfix d-flex flex-wrap m-1 ml-2 mt-0">
                                                                                        <button role="menuitem"
                                                                                            class="btn-link col-3 flex-content-center flex-items-center no-underline add-reactions-options-item js-reaction-option-item js-optimistic-reaction-render-button">
                                                                                            <span class="emoji">👍</span>
                                                                                        </button>
                                                                                        <button role="menuitem"
                                                                                            class="btn-link col-3 flex-content-center flex-items-center no-underline add-reactions-options-item js-reaction-option-item js-optimistic-reaction-render-button">
                                                                                            <span class="emoji">👎</span>
                                                                                        </button>
                                                                                        <button role="menuitem"
                                                                                            class="btn-link col-3 flex-content-center flex-items-center no-underline add-reactions-options-item js-reaction-option-item js-optimistic-reaction-render-button">
                                                                                            <span class="emoji">😄</span>
                                                                                        </button>
                                                                                        <button role="menuitem"
                                                                                            class="btn-link col-3 flex-content-center flex-items-center no-underline add-reactions-options-item js-reaction-option-item js-optimistic-reaction-render-button">
                                                                                            <span class="emoji">🎉</span>
                                                                                        </button>
                                                                                        <button role="menuitem"
                                                                                            class="btn-link col-3 flex-content-center flex-items-center no-underline add-reactions-options-item js-reaction-option-item js-optimistic-reaction-render-button">
                                                                                            <span class="emoji">😕</span>
                                                                                        </button>
                                                                                        <button role="menuitem"
                                                                                            class="btn-link col-3 flex-content-center flex-items-center no-underline add-reactions-options-item js-reaction-option-item js-optimistic-reaction-render-button">
                                                                                            <span class="emoji">❤️</span>
                                                                                        </button>
                                                                                        <button role="menuitem"
                                                                                            class="btn-link col-3 flex-content-center flex-items-center no-underline add-reactions-options-item js-reaction-option-item js-optimistic-reaction-render-button">
                                                                                            <span class="emoji">🚀</span>
                                                                                        </button>
                                                                                        <button role="menuitem"
                                                                                            class="btn-link col-3 flex-content-center flex-items-center no-underline add-reactions-options-item js-reaction-option-item js-optimistic-reaction-render-button">
                                                                                            <span class="emoji">👀</span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </details-menu>
                                                                        </details>
                                                                    </div>


                                                                </div>
                                                            </div>

                                                            <!-- '"` -->
                                                            <!-- </textarea></xmp> -->
                                                            <form class="js-comment-update" action="/"
                                                                accept-charset="UTF-8" method="post">
                                                                <div class="js-edit-comment-form-container">
                                                                </div>
                                                            </form>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>


                                <h2 class="sr-only">Replies</h2>

                                <div class="js-timeline-marker">
                                    <div class="d-flex flex-items-center flex-wrap">
                                        <div class="js-socket-channel js-updatable-content d-flex flex-auto">
                                            <div class="my-2 mr-2 h4" id="discussion-comment-count">
                                                4 suggested answers
                                            </div>

                                        </div>

                                        <div class="BtnGroup">
                                            <a href="/" class="btn BtnGroup-item selected">
                                                Oldest
                                            </a>
                                            <a href="/" class="btn BtnGroup-item ">
                                                Newest
                                            </a>
                                            <a href="/" class="btn BtnGroup-item ">
                                                Top
                                            </a>
                                        </div>
                                    </div>

                                    <div class="js-timeline-item js-timeline-progressive-focus-container">
                                        <div class="TimelineItem discussion-timeline-item mx-0 js-comment-container">
                                            <div class="discussions-timeline-scroll-target">
                                                <div class="
                                        timeline-comment-group
                                        discussion-comment
                                        js-discussion-comment
                                        js-minimizable-comment-group
                                        js-targetable-element
                                        TimelineItem-body
                                        js-timeline-discussion-comment my-1
                                      " data-error="">


                                                    <div class="d-flex">

                                                        <div style="width:56px;" class="flex-shrink-0 ml-n2 mr-2 >mt-n1"
                                                            data-replace-remote-form-target="">
                                                            <div data-url="/" data-upvoted=""
                                                                class="text-center discussion-vote-form position-relative ">
                                                                <button type="button"
                                                                    class="js-upvote-button upvote-button btn-link discussion-vote"
                                                                    aria-label="Upvote" data-disable-with="">
                                                                    <svg width="15" height="16"
                                                                        class="octicon octicon-arrow-up width-full discussion-upvote-icon"
                                                                        viewBox="0 0 16 16" version="1.1"
                                                                        aria-hidden="true">
                                                                        <path fill-rule="evenodd"
                                                                            d="M3.47 7.78a.75.75 0 010-1.06l4.25-4.25a.75.75 0 011.06 0l4.25 4.25a.75.75 0 01-1.06 1.06L9 4.81v7.44a.75.75 0 01-1.5 0V4.81L4.53 7.78a.75.75 0 01-1.06 0z">
                                                                        </path>
                                                                    </svg>
                                                                </button>
                                                                <div class="d-flex flex-justify-center width-full">
                                                                    <div class="Counter Counter--secondary discussion-vote-count d-flex flex-row"
                                                                        style="min-width:26px;">
                                                                        <div style="height: 1.5em; overflow: hidden;"
                                                                            class="width-full">
                                                                            <div class="slidey-boi d-flex flex-column">
                                                                                <span class="js-default-vote-count"
                                                                                    aria-hidden="false"> 1</span>
                                                                                <span class="js-upvoted-vote-count"
                                                                                    aria-hidden="true">2</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="width-full" style="width: calc(100% - 56px) !important">
                                                            <div
                                                                class="discussion-comment timeline-comment unminimized-comment comment previewable-edit js-task-list-container flex-auto box-shadow-none js-comment reorderable-task-lists timeline-chosen-answer color-shadow-medium">
                                                                <div class="edit-comment-hide">
                                                                    <div
                                                                        class="clearfix d-flex px-3 flex-row-reverse flex-items-center">
                                                                        <div class="timeline-comment-actions flex-shrink-0">
                                                                            <div class="d-flex flex-row flex-items-center">
                                                                                <div class="mr-2 d-inline-flex">

                                                                                    <span>
                                                                                        <svg height="22"
                                                                                            class="octicon octicon-check-circle-fill color-text-success"
                                                                                            viewBox="0 0 16 16"
                                                                                            version="1.1" width="22"
                                                                                            aria-hidden="true">
                                                                                            <path fill-rule="evenodd"
                                                                                                d="M8 16A8 8 0 108 0a8 8 0 000 16zm3.78-9.72a.75.75 0 00-1.06-1.06L6.75 9.19 5.28 7.72a.75.75 0 00-1.06 1.06l2 2a.75.75 0 001.06 0l4.5-4.5z">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </span>

                                                                                </div>

                                                                            </div>
                                                                        </div>

                                                                        <h3
                                                                            class="timeline-comment-header-text f5 text-normal d-flex pb-0 flex-items-baseline pt-2">

                                                                            <div
                                                                                class="avatar-parent-child flex-column flex-items-center">
                                                                                <a class="d-inline-block"
                                                                                    href="/bahdcoder"><img
                                                                                        class="avatar rounded-1 mr-2 avatar-user"
                                                                                        src="https://avatars.githubusercontent.com/u/2189038?s=60&amp;v=4"
                                                                                        width="30" height="30"
                                                                                        alt="@bahdcoder"></a>
                                                                            </div>

                                                                            <a href="/bahdcoder"
                                                                                class="author text-bold Link--primary css-truncate css-truncate-target width-fit lh-condensed">
                                                                                bahdcoder
                                                                            </a>
                                                                            <a href="#discussioncomment-143357"
                                                                                id="discussioncomment-143357-permalink"
                                                                                class="Link--secondary js-timestamp d-inline-block ml-2">
                                                                                <relative-time
                                                                                    datetime="2020-12-01T10:27:05Z"
                                                                                    class="no-wrap"
                                                                                    title="1 Dec 2020, 11:27 GMT+1">on 1 Dec
                                                                                    2020</relative-time>
                                                                            </a>


                                                                            <div class="d-none d-sm-inline-flex ml-2">


                                                                                <span
                                                                                    title="This user is the author of this discussion."
                                                                                    class="Label timeline-comment-label py-0 ml-1">
                                                                                    Author
                                                                                </span>

                                                                            </div>

                                                                        </h3>
                                                                    </div>
                                                                </div>


                                                                <div class="">
                                                                    <div class="edit-comment-hide">
                                                                        <!-- HTML FOR REPLY OR DISCUSSION HERE -->
                                                                        <div
                                                                            class="d-flex flex-justify-between flex-content-center">
                                                                            <div
                                                                                class="comment-reactions d-flex flex-items-start flex-row-reverse js-reactions-container js-reaction-buttons-container flex-justify-end">
                                                                                <form class="js-pick-reaction" action="/"
                                                                                    accept-charset="UTF-8" method="post">
                                                                                    <div
                                                                                        class="comment-reactions-options js-comment-reactions-options">
                                                                                    </div>
                                                                                </form>
                                                                                <details
                                                                                    class="details-overlay details-reset dropdown hx_dropdown-fullscreen position-relative d-inline-block reaction-popover-container reactions-menu js-reaction-popover-container js-comment-header-reaction-button">
                                                                                    <summary
                                                                                        class="add-reaction-btn btn-sm Link--secondary discussion-add-reaction-button mb-3 mr-3 color-bg-tertiary border color-border-primary rounded-2"
                                                                                        aria-label="Add your reaction"
                                                                                        aria-haspopup="menu" role="button">
                                                                                        <svg height="18"
                                                                                            class="octicon octicon-smiley"
                                                                                            viewBox="0 0 16 16"
                                                                                            version="1.1" width="18"
                                                                                            aria-hidden="true">
                                                                                            <path fill-rule="evenodd"
                                                                                                d="M1.5 8a6.5 6.5 0 1113 0 6.5 6.5 0 01-13 0zM8 0a8 8 0 100 16A8 8 0 008 0zM5 8a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zM5.32 9.636a.75.75 0 011.038.175l.007.009c.103.118.22.222.35.31.264.178.683.37 1.285.37.602 0 1.02-.192 1.285-.371.13-.088.247-.192.35-.31l.007-.008a.75.75 0 111.222.87l-.614-.431c.614.43.614.431.613.431v.001l-.001.002-.002.003-.005.007-.014.019a1.984 1.984 0 01-.184.213c-.16.166-.338.316-.53.445-.63.418-1.37.638-2.127.629-.946 0-1.652-.308-2.126-.63a3.32 3.32 0 01-.715-.657l-.014-.02-.005-.006-.002-.003v-.002h-.001l.613-.432-.614.43a.75.75 0 01.183-1.044h.001z">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </summary>

                                                                                    <details-menu
                                                                                        class="js-add-reaction-popover anim-scale-in dropdown-menu dropdown-menu-se "
                                                                                        aria-label="Pick your reaction"
                                                                                        style="width: 150px" role="menu">
                                                                                        <form class="js-pick-reaction"
                                                                                            action="/"
                                                                                            accept-charset="UTF-8"
                                                                                            method="post">
                                                                                            <p
                                                                                                class="color-text-secondary mx-2 my-1 js-reaction-description">
                                                                                                Pick your reaction</p>

                                                                                            <div role="none"
                                                                                                class="dropdown-divider">
                                                                                            </div>

                                                                                            <div
                                                                                                class="clearfix d-flex flex-wrap m-1 ml-2 mt-0">
                                                                                                <button type="submit"
                                                                                                    role="menuitem"
                                                                                                    class="btn-link col-3 flex-content-center flex-items-center no-underline add-reactions-options-item js-reaction-option-item js-optimistic-reaction-render-button"
                                                                                                    data-reaction-label="+1"
                                                                                                    data-reaction-content="+1"
                                                                                                    name="input[content]"
                                                                                                    aria-label="React with thumbs up emoji"
                                                                                                    value="THUMBS_UP react">
                                                                                                    <g-emoji alias="+1"
                                                                                                        fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f44d.png"
                                                                                                        class="emoji">👍
                                                                                                    </g-emoji>
                                                                                                </button>
                                                                                                <button type="submit"
                                                                                                    role="menuitem"
                                                                                                    class="btn-link col-3 flex-content-center flex-items-center no-underline add-reactions-options-item js-reaction-option-item js-optimistic-reaction-render-button"
                                                                                                    data-reaction-label="-1"
                                                                                                    data-reaction-content="-1"
                                                                                                    name="input[content]"
                                                                                                    aria-label="React with thumbs down emoji"
                                                                                                    value="THUMBS_DOWN react">
                                                                                                    <g-emoji alias="-1"
                                                                                                        fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f44e.png"
                                                                                                        class="emoji">👎
                                                                                                    </g-emoji>
                                                                                                </button>
                                                                                                <button type="submit"
                                                                                                    role="menuitem"
                                                                                                    class="btn-link col-3 flex-content-center flex-items-center no-underline add-reactions-options-item js-reaction-option-item js-optimistic-reaction-render-button"
                                                                                                    data-reaction-label="Laugh"
                                                                                                    data-reaction-content="smile"
                                                                                                    name="input[content]"
                                                                                                    aria-label="React with laugh emoji"
                                                                                                    value="LAUGH react">
                                                                                                    <g-emoji alias="smile"
                                                                                                        fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f604.png"
                                                                                                        class="emoji">😄
                                                                                                    </g-emoji>
                                                                                                </button>
                                                                                                <button type="submit"
                                                                                                    role="menuitem"
                                                                                                    class="btn-link col-3 flex-content-center flex-items-center no-underline add-reactions-options-item js-reaction-option-item js-optimistic-reaction-render-button"
                                                                                                    data-reaction-label="Hooray"
                                                                                                    data-reaction-content="tada"
                                                                                                    name="input[content]"
                                                                                                    aria-label="React with hooray emoji"
                                                                                                    value="HOORAY react">
                                                                                                    <g-emoji alias="tada"
                                                                                                        fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f389.png"
                                                                                                        class="emoji">🎉
                                                                                                    </g-emoji>
                                                                                                </button>
                                                                                                <button type="submit"
                                                                                                    role="menuitem"
                                                                                                    class="btn-link col-3 flex-content-center flex-items-center no-underline add-reactions-options-item js-reaction-option-item js-optimistic-reaction-render-button"
                                                                                                    data-reaction-label="Confused"
                                                                                                    data-reaction-content="thinking_face"
                                                                                                    name="input[content]"
                                                                                                    aria-label="React with confused emoji"
                                                                                                    value="CONFUSED react">
                                                                                                    <g-emoji
                                                                                                        alias="thinking_face"
                                                                                                        fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f615.png"
                                                                                                        class="emoji">😕
                                                                                                    </g-emoji>
                                                                                                </button>
                                                                                                <button type="submit"
                                                                                                    role="menuitem"
                                                                                                    class="btn-link col-3 flex-content-center flex-items-center no-underline add-reactions-options-item js-reaction-option-item js-optimistic-reaction-render-button"
                                                                                                    data-reaction-label="Heart"
                                                                                                    data-reaction-content="heart"
                                                                                                    name="input[content]"
                                                                                                    aria-label="React with heart emoji"
                                                                                                    value="HEART react">
                                                                                                    <g-emoji alias="heart"
                                                                                                        fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/2764.png"
                                                                                                        class="emoji">❤️
                                                                                                    </g-emoji>
                                                                                                </button>
                                                                                                <button type="submit"
                                                                                                    role="menuitem"
                                                                                                    class="btn-link col-3 flex-content-center flex-items-center no-underline add-reactions-options-item js-reaction-option-item js-optimistic-reaction-render-button"
                                                                                                    data-reaction-label="Rocket"
                                                                                                    data-reaction-content="rocket"
                                                                                                    name="input[content]"
                                                                                                    aria-label="React with rocket emoji"
                                                                                                    value="ROCKET react">
                                                                                                    <g-emoji alias="rocket"
                                                                                                        fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f680.png"
                                                                                                        class="emoji">🚀
                                                                                                    </g-emoji>
                                                                                                </button>
                                                                                                <button type="submit"
                                                                                                    role="menuitem"
                                                                                                    class="btn-link col-3 flex-content-center flex-items-center no-underline add-reactions-options-item js-reaction-option-item js-optimistic-reaction-render-button"
                                                                                                    data-reaction-label="Eyes"
                                                                                                    data-reaction-content="eyes"
                                                                                                    name="input[content]"
                                                                                                    aria-label="React with eyes emoji"
                                                                                                    value="EYES react">
                                                                                                    <g-emoji alias="eyes"
                                                                                                        fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f440.png"
                                                                                                        class="emoji">👀
                                                                                                    </g-emoji>
                                                                                                </button>
                                                                                            </div>
                                                                                        </form>
                                                                                    </details-menu>
                                                                                </details>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- '"` -->
                                                                    <!-- </textarea></xmp> -->
                                                                    <form class="js-comment-update" action="/"
                                                                        accept-charset="UTF-8" method="post">
                                                                        <div class="js-edit-comment-form-container">
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                                <div class="js-timeline-marker" data-child-comments="">

                                                                </div>



                                                                <table class="timeline-inline-comments">
                                                                    <tbody>
                                                                        <tr class="js-inline-comments-container">
                                                                            <td class="js-line-comments" colspan="3">
                                                                                <div class="review-thread-reply pl-3">
                                                                                    <div
                                                                                        class="inline-comment-form-container js-inline-comment-form-container">
                                                                                        <div
                                                                                            class="inline-comment-form-actions">
                                                                                            <div class="d-table width-full">
                                                                                                <div class="d-table-cell">
                                                                                                    <a class="d-inline-block"
                                                                                                        data-hovercard-type="user"
                                                                                                        data-hovercard-url="/users/bahdcoder/hovercard"
                                                                                                        data-octo-click="hovercard-link-click"
                                                                                                        data-octo-dimensions="link_type:self"
                                                                                                        href="/bahdcoder"><img
                                                                                                            class="avatar avatar-user"
                                                                                                            src="https://avatars.githubusercontent.com/u/19477966?s=60&amp;v=4"
                                                                                                            width="30"
                                                                                                            height="30"
                                                                                                            alt="@bahdcoder"></a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="d-table-cell col-12">
                                                                                                    <button type="button"
                                                                                                        class="review-thread-reply-button width-full color-text-secondary text-left form-control js-discussions-previewable-comment-form">
                                                                                                        Write a reply
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="inline-comment-form discussion-nested-comment-inline-form js-discussions-previewable-comment-form-container"
                                                                                            data-parent-comment-id="143357">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                            <div class="color-text-success mt-2 ml-3">
                                                                <span class="mb-2 mb-md-0"><span>Answer selected by</span>
                                                                    <a class="d-inline-block text-inherit text-bold"
                                                                        href="/bahdcoder">bahdcoder</a></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="js-timeline-marker js-socket-channel js-updatable-content">
                                    </div>
                                </div>

                            </div>


                            <span id="issue-comment-box"></span>

                            <div class="discussion-timeline-actions">

                                <div class="timeline-comment-wrapper timeline-new-comment js-comment-container ml-0 pl-0">
                                    <!-- '"` -->
                                    <!-- </textarea></xmp> -->
                                    <form class="js-new-comment-form js-needs-timeline-marker-header" action=""
                                        accept-charset="UTF-8" method="post">
                                        <div class="border-0 border-md timeline-comment">
                                            <tab-container
                                                class="js-previewable-comment-form previewable-comment-form write-selected">
                                                <div
                                                    class="comment-form-head tabnav d-flex flex-justify-between mb-2 color-bg-tertiary p-0 tabnav--responsive flex-column border-bottom-0 mb-0 mb-lg-2 flex-items-stretch border-lg-bottom color-border-primary flex-lg-items-center flex-lg-row">
                                                    <div class="tabnav-tabs mx-0 mx-md-2 mt-0 mt-md-2 no-wrap d-flex flex-auto d-md-block"
                                                        role="tablist">
                                                        <button type="button"
                                                            class="btn-link tabnav-tab write-tab js-write-tab px-3 px-sm-6 px-md-3 flex-1 flex-md-auto"
                                                            role="tab" aria-selected="true" tabindex="0">
                                                            Write
                                                        </button>
                                                        <button type="button"
                                                            class="btn-link tabnav-tab preview-tab js-preview-tab flex-1 flex-md-auto"
                                                            role="tab" aria-selected="false" tabindex="-1">
                                                            Preview
                                                        </button>
                                                    </div>
                                                    <markdown-toolbar role="toolbar" aria-label="Composition"
                                                        for="new_comment_field"
                                                        class="js-details-container Details toolbar-commenting d-flex no-wrap flex-items-start flex-wrap px-2 pt-2 pt-lg-0 border-md-top border-lg-top-0"
                                                        tabindex="0">
                                                        <div class="d-block d-md-none flex-auto">
                                                            <button data-md-button="" tabindex="-1" type="button"
                                                                aria-label="Toggle text tools" aria-expanded="false"
                                                                class="js-details-target btn-link toolbar-item no-underline py-2 mr-1">
                                                                <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1"
                                                                    height="16" width="16"
                                                                    class="octicon octicon-typography">
                                                                    <path fill-rule="evenodd"
                                                                        d="M6.21 8.5L4.574 3.594 2.857 8.5H6.21zm.5 1.5l.829 2.487a.75.75 0 001.423-.474L5.735 2.332a1.216 1.216 0 00-2.302-.018l-3.39 9.688a.75.75 0 001.415.496L2.332 10H6.71zm3.13-4.358C10.53 4.374 11.87 4 13 4c1.5 0 3 .939 3 2.601v5.649a.75.75 0 01-1.448.275C13.995 12.82 13.3 13 12.5 13c-.77 0-1.514-.231-2.078-.709-.577-.488-.922-1.199-.922-2.041 0-.694.265-1.411.887-1.944C11 7.78 11.88 7.5 13 7.5h1.5v-.899c0-.54-.5-1.101-1.5-1.101-.869 0-1.528.282-1.84.858a.75.75 0 11-1.32-.716zM14.5 9H13c-.881 0-1.375.22-1.637.444-.253.217-.363.5-.363.806 0 .408.155.697.39.896.249.21.63.354 1.11.354.732 0 1.26-.209 1.588-.449.35-.257.412-.495.412-.551V9z">
                                                                    </path>
                                                                </svg>
                                                                <svg class="octicon octicon-chevron-up Details-content--shown"
                                                                    viewBox="0 0 16 16" version="1.1" width="16" height="16"
                                                                    aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                        d="M3.22 9.78a.75.75 0 010-1.06l4.25-4.25a.75.75 0 011.06 0l4.25 4.25a.75.75 0 01-1.06 1.06L8 6.06 4.28 9.78a.75.75 0 01-1.06 0z">
                                                                    </path>
                                                                </svg>
                                                                <svg class="octicon octicon-chevron-down Details-content--hidden"
                                                                    viewBox="0 0 16 16" version="1.1" width="16" height="16"
                                                                    aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                        d="M12.78 6.22a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06 0L3.22 7.28a.75.75 0 011.06-1.06L8 9.94l3.72-3.72a.75.75 0 011.06 0z">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                        </div>



                                                        <div class="flex-nowrap d-none d-md-inline-block mr-3">
                                                            <md-header tabindex="-1"
                                                                class="toolbar-item tooltipped tooltipped-sw mx-1"
                                                                aria-label="Add header text"
                                                                data-ga-click="Markdown Toolbar, click, header"
                                                                role="button">
                                                                <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1"
                                                                    height="16" width="16" class="octicon octicon-heading">
                                                                    <path fill-rule="evenodd"
                                                                        d="M3.75 2a.75.75 0 01.75.75V7h7V2.75a.75.75 0 011.5 0v10.5a.75.75 0 01-1.5 0V8.5h-7v4.75a.75.75 0 01-1.5 0V2.75A.75.75 0 013.75 2z">
                                                                    </path>
                                                                </svg>
                                                            </md-header>

                                                            <md-bold tabindex="-1"
                                                                class="toolbar-item tooltipped tooltipped-sw mx-1 js-modifier-label-key"
                                                                aria-label="Add bold text <cmd-b>"
                                                                data-ga-click="Markdown Toolbar, click, bold" role="button"
                                                                hotkey="b">
                                                                <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1"
                                                                    height="16" width="16" class="octicon octicon-bold">
                                                                    <path fill-rule="evenodd"
                                                                        d="M4 2a1 1 0 00-1 1v10a1 1 0 001 1h5.5a3.5 3.5 0 001.852-6.47A3.5 3.5 0 008.5 2H4zm4.5 5a1.5 1.5 0 100-3H5v3h3.5zM5 9v3h4.5a1.5 1.5 0 000-3H5z">
                                                                    </path>
                                                                </svg>
                                                            </md-bold>

                                                            <md-italic tabindex="-1"
                                                                class="toolbar-item tooltipped tooltipped-sw mx-1 js-modifier-label-key"
                                                                aria-label="Add italic text <cmd-i>"
                                                                data-ga-click="Markdown Toolbar, click, italic"
                                                                role="button" hotkey="i">
                                                                <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1"
                                                                    height="16" width="16" class="octicon octicon-italic">
                                                                    <path fill-rule="evenodd"
                                                                        d="M6 2.75A.75.75 0 016.75 2h6.5a.75.75 0 010 1.5h-2.505l-3.858 9H9.25a.75.75 0 010 1.5h-6.5a.75.75 0 010-1.5h2.505l3.858-9H6.75A.75.75 0 016 2.75z">
                                                                    </path>
                                                                </svg>
                                                            </md-italic>
                                                        </div>

                                                        <div class="d-flex d-md-inline-block mr-0 mr-md-3">
                                                            <md-quote tabindex="-1"
                                                                class="toolbar-item tooltipped tooltipped-sw p-2 p-md-1 mx-1"
                                                                aria-label="Insert a quote"
                                                                data-ga-click="Markdown Toolbar, click, quote"
                                                                role="button">
                                                                <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1"
                                                                    height="16" width="16" class="octicon octicon-quote">
                                                                    <path fill-rule="evenodd"
                                                                        d="M1.75 2.5a.75.75 0 000 1.5h10.5a.75.75 0 000-1.5H1.75zm4 5a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5zm0 5a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5zM2.5 7.75a.75.75 0 00-1.5 0v6a.75.75 0 001.5 0v-6z">
                                                                    </path>
                                                                </svg>
                                                            </md-quote>

                                                            <md-code tabindex="-1"
                                                                class="toolbar-item tooltipped tooltipped-sw js-modifier-label-key p-2 p-md-1 mx-1"
                                                                aria-label="Insert code <cmd-e>"
                                                                data-ga-click="Markdown Toolbar, click, code" role="button"
                                                                hotkey="e">
                                                                <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1"
                                                                    height="16" width="16" class="octicon octicon-code">
                                                                    <path fill-rule="evenodd"
                                                                        d="M4.72 3.22a.75.75 0 011.06 1.06L2.06 8l3.72 3.72a.75.75 0 11-1.06 1.06L.47 8.53a.75.75 0 010-1.06l4.25-4.25zm6.56 0a.75.75 0 10-1.06 1.06L13.94 8l-3.72 3.72a.75.75 0 101.06 1.06l4.25-4.25a.75.75 0 000-1.06l-4.25-4.25z">
                                                                    </path>
                                                                </svg>
                                                            </md-code>

                                                            <button type="button" data-md-button="" tabindex="-1"
                                                                class="toolbar-item text-center menu-target p-2 mx-1 d-md-none js-markdown-link-button"
                                                                aria-label="Add a link"
                                                                data-ga-click="Markdown Toolbar, click, saved reply">
                                                                <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1"
                                                                    height="16" width="16" class="octicon octicon-link">
                                                                    <path fill-rule="evenodd"
                                                                        d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z">
                                                                    </path>
                                                                </svg>
                                                            </button>

                                                            <template class="js-markdown-link-dialog">
                                                                <div class="Box-header">
                                                                    <h3 class="Box-title">Insert Link</h3>
                                                                </div>
                                                                <div class="Box-body overflow-auto">
                                                                    <div>
                                                                        <label class="d-block mb-1"
                                                                            for="js-dialog-link-text">Link Text</label>
                                                                        <input type="text"
                                                                            class="mb-3 form-control input-block"
                                                                            id="js-dialog-link-text" autofocus="">
                                                                    </div>
                                                                    <div>
                                                                        <label class="d-block mb-1"
                                                                            for="js-dialog-link-href">URL</label>
                                                                        <input type="url"
                                                                            class="mb-3 form-control input-block"
                                                                            id="js-dialog-link-href">
                                                                    </div>
                                                                    <div class="pt-3 border-top">
                                                                        <button type="button"
                                                                            class="btn btn-primary btn-block js-markdown-link-insert"
                                                                            data-close-dialog=""
                                                                            data-for-textarea="new_comment_field">
                                                                            Add
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </template>

                                                            <md-link tabindex="-1"
                                                                class="toolbar-item tooltipped tooltipped-sw p-2 p-md-1 d-none d-md-block mx-1 js-modifier-label-key"
                                                                aria-label="Add a link <cmd-k>"
                                                                data-ga-click="Markdown Toolbar, click, link" role="button"
                                                                hotkey="k">
                                                                <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1"
                                                                    height="16" width="16" class="octicon octicon-link">
                                                                    <path fill-rule="evenodd"
                                                                        d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z">
                                                                    </path>
                                                                </svg>
                                                            </md-link>
                                                        </div>

                                                        <div class="d-none d-md-inline-block mr-3">
                                                            <md-unordered-list tabindex="-1"
                                                                class="toolbar-item tooltipped tooltipped-sw mx-1"
                                                                aria-label="Add a bulleted list"
                                                                data-ga-click="Markdown Toolbar, click, unordered list"
                                                                role="button">
                                                                <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1"
                                                                    height="16" width="16"
                                                                    class="octicon octicon-list-unordered">
                                                                    <path fill-rule="evenodd"
                                                                        d="M2 4a1 1 0 100-2 1 1 0 000 2zm3.75-1.5a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5zm0 5a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5zm0 5a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5zM3 8a1 1 0 11-2 0 1 1 0 012 0zm-1 6a1 1 0 100-2 1 1 0 000 2z">
                                                                    </path>
                                                                </svg>
                                                            </md-unordered-list>

                                                            <md-ordered-list tabindex="-1"
                                                                class="toolbar-item tooltipped tooltipped-sw mx-1"
                                                                aria-label="Add a numbered list"
                                                                data-ga-click="Markdown Toolbar, click, ordered list"
                                                                role="button">
                                                                <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1"
                                                                    height="16" width="16"
                                                                    class="octicon octicon-list-ordered">
                                                                    <path fill-rule="evenodd"
                                                                        d="M2.003 2.5a.5.5 0 00-.723-.447l-1.003.5a.5.5 0 00.446.895l.28-.14V6H.5a.5.5 0 000 1h2.006a.5.5 0 100-1h-.503V2.5zM5 3.25a.75.75 0 01.75-.75h8.5a.75.75 0 010 1.5h-8.5A.75.75 0 015 3.25zm0 5a.75.75 0 01.75-.75h8.5a.75.75 0 010 1.5h-8.5A.75.75 0 015 8.25zm0 5a.75.75 0 01.75-.75h8.5a.75.75 0 010 1.5h-8.5a.75.75 0 01-.75-.75zM.924 10.32l.003-.004a.851.851 0 01.144-.153A.66.66 0 011.5 10c.195 0 .306.068.374.146a.57.57 0 01.128.376c0 .453-.269.682-.8 1.078l-.035.025C.692 11.98 0 12.495 0 13.5a.5.5 0 00.5.5h2.003a.5.5 0 000-1H1.146c.132-.197.351-.372.654-.597l.047-.035c.47-.35 1.156-.858 1.156-1.845 0-.365-.118-.744-.377-1.038-.268-.303-.658-.484-1.126-.484-.48 0-.84.202-1.068.392a1.858 1.858 0 00-.348.384l-.007.011-.002.004-.001.002-.001.001a.5.5 0 00.851.525zM.5 10.055l-.427-.26.427.26z">
                                                                    </path>
                                                                </svg>
                                                            </md-ordered-list>

                                                            <md-task-list tabindex="-1"
                                                                class="toolbar-item tooltipped tooltipped-sw mx-1"
                                                                aria-label="Add a task list"
                                                                data-ga-click="Markdown Toolbar, click, task list"
                                                                role="button" hotkey="L">
                                                                <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1"
                                                                    height="16" width="16" class="octicon octicon-tasklist">
                                                                    <path fill-rule="evenodd"
                                                                        d="M2.5 2.75a.25.25 0 01.25-.25h10.5a.25.25 0 01.25.25v10.5a.25.25 0 01-.25.25H2.75a.25.25 0 01-.25-.25V2.75zM2.75 1A1.75 1.75 0 001 2.75v10.5c0 .966.784 1.75 1.75 1.75h10.5A1.75 1.75 0 0015 13.25V2.75A1.75 1.75 0 0013.25 1H2.75zm9.03 5.28a.75.75 0 00-1.06-1.06L6.75 9.19 5.28 7.72a.75.75 0 00-1.06 1.06l2 2a.75.75 0 001.06 0l4.5-4.5z">
                                                                    </path>
                                                                </svg>
                                                            </md-task-list>
                                                        </div>

                                                        <div class="d-flex d-xs-inline-block">
                                                            <md-mention tabindex="-1"
                                                                class="flex-auto text-center toolbar-item tooltipped tooltipped-sw p-2 p-md-1 mx-1"
                                                                aria-label="Directly mention a user or team"
                                                                data-ga-click="Markdown Toolbar, click, mention"
                                                                role="button">
                                                                <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1"
                                                                    height="16" width="16" class="octicon octicon-mention">
                                                                    <path fill-rule="evenodd"
                                                                        d="M4.75 2.37a6.5 6.5 0 006.5 11.26.75.75 0 01.75 1.298 8 8 0 113.994-7.273.754.754 0 01.006.095v1.5a2.75 2.75 0 01-5.072 1.475A4 4 0 1112 8v1.25a1.25 1.25 0 002.5 0V7.867a6.5 6.5 0 00-9.75-5.496V2.37zM10.5 8a2.5 2.5 0 10-5 0 2.5 2.5 0 005 0z">
                                                                    </path>
                                                                </svg>
                                                            </md-mention>

                                                            <label for="fc-new_comment_field" data-md-button=""
                                                                tabindex="-1"
                                                                class="d-block d-md-none btn-link flex-auto text-center toolbar-item tooltipped tooltipped-sw p-2 mx-1"
                                                                aria-label="Attach an image">
                                                                <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1"
                                                                    height="16" width="16" class="octicon octicon-image">
                                                                    <path fill-rule="evenodd"
                                                                        d="M1.75 2.5a.25.25 0 00-.25.25v10.5c0 .138.112.25.25.25h.94a.76.76 0 01.03-.03l6.077-6.078a1.75 1.75 0 012.412-.06L14.5 10.31V2.75a.25.25 0 00-.25-.25H1.75zm12.5 11H4.81l5.048-5.047a.25.25 0 01.344-.009l4.298 3.889v.917a.25.25 0 01-.25.25zm1.75-.25V2.75A1.75 1.75 0 0014.25 1H1.75A1.75 1.75 0 000 2.75v10.5C0 14.216.784 15 1.75 15h12.5A1.75 1.75 0 0016 13.25zM5.5 6a.5.5 0 11-1 0 .5.5 0 011 0zM7 6a2 2 0 11-4 0 2 2 0 014 0z">
                                                                    </path>
                                                                </svg>
                                                            </label>

                                                            <md-ref tabindex="-1"
                                                                class="flex-auto text-center toolbar-item tooltipped tooltipped-sw p-2 p-md-1 mx-1"
                                                                aria-label="Reference an issue, pull request, or discussion"
                                                                data-ga-click="Markdown Toolbar, click, reference"
                                                                role="button">
                                                                <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1"
                                                                    height="16" width="16"
                                                                    class="octicon octicon-cross-reference">
                                                                    <path fill-rule="evenodd"
                                                                        d="M16 1.25v4.146a.25.25 0 01-.427.177L14.03 4.03l-3.75 3.75a.75.75 0 11-1.06-1.06l3.75-3.75-1.543-1.543A.25.25 0 0111.604 1h4.146a.25.25 0 01.25.25zM2.75 3.5a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h2a.75.75 0 01.75.75v2.19l2.72-2.72a.75.75 0 01.53-.22h4.5a.25.25 0 00.25-.25v-2.5a.75.75 0 111.5 0v2.5A1.75 1.75 0 0113.25 13H9.06l-2.573 2.573A1.457 1.457 0 014 14.543V13H2.75A1.75 1.75 0 011 11.25v-7.5C1 2.784 1.784 2 2.75 2h5.5a.75.75 0 010 1.5h-5.5z">
                                                                    </path>
                                                                </svg>
                                                            </md-ref>

                                                            <details
                                                                class="details-reset details-overlay flex-auto toolbar-item select-menu select-menu-modal-right js-saved-reply-container hx_rsm"
                                                                tabindex="-1">
                                                                <summary data-md-button="" tabindex="-1"
                                                                    class="text-center tooltipped tooltipped-sw menu-target py-2 p-md-1 hx_rsm-trigger ml-1"
                                                                    aria-label="Insert a reply"
                                                                    data-ga-click="Markdown Toolbar, click, saved reply"
                                                                    aria-haspopup="menu" role="button">
                                                                    <svg aria-hidden="true" viewBox="0 0 16 16"
                                                                        version="1.1" height="16" width="16"
                                                                        class="octicon octicon-reply">
                                                                        <path fill-rule="evenodd"
                                                                            d="M6.78 1.97a.75.75 0 010 1.06L3.81 6h6.44A4.75 4.75 0 0115 10.75v2.5a.75.75 0 01-1.5 0v-2.5a3.25 3.25 0 00-3.25-3.25H3.81l2.97 2.97a.75.75 0 11-1.06 1.06L1.47 7.28a.75.75 0 010-1.06l4.25-4.25a.75.75 0 011.06 0z">
                                                                        </path>
                                                                    </svg>
                                                                    <span class="dropdown-caret hide-sm"></span>
                                                                </summary>

                                                                <details-menu style="z-index: 99;"
                                                                    class="select-menu-modal position-absolute right-0 js-saved-reply-menu hx_rsm-modal"
                                                                    data-menu-input="new_comment_field_saved_reply_id"
                                                                    src="/settings/replies?context=none" preload=""
                                                                    role="menu">
                                                                    <div class="select-menu-header d-flex">
                                                                        <span class="select-menu-title flex-auto">Select a
                                                                            reply</span>
                                                                        <code><span class="border rounded p-1 mr-2">ctrl
                                                                                .</span></code>
                                                                    </div>

                                                                    <include-fragment role="menuitem" aria-label="Loading">
                                                                        <svg style="box-sizing: content-box; color: var(--color-icon-primary);"
                                                                            viewBox="0 0 16 16" fill="none" width="32"
                                                                            height="32"
                                                                            class="my-6 mx-auto d-block anim-rotate">
                                                                            <circle cx="8" cy="8" r="7"
                                                                                stroke="currentColor" stroke-opacity="0.25"
                                                                                stroke-width="2"
                                                                                vector-effect="non-scaling-stroke"></circle>
                                                                            <path d="M15 8a7.002 7.002 0 00-7-7"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                vector-effect="non-scaling-stroke"></path>
                                                                        </svg>
                                                                    </include-fragment>

                                                                </details-menu>
                                                            </details>

                                                        </div>


                                                        <div class="Details-content--hidden d-block d-md-none width-full">
                                                            <md-header tabindex="-1"
                                                                class="toolbar-item tooltipped tooltipped-sw py-2 pr-2 pl-1 mr-1"
                                                                aria-label="Add header text"
                                                                data-ga-click="Markdown Toolbar, click, header"
                                                                role="button">
                                                                <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1"
                                                                    height="16" width="16" class="octicon octicon-heading">
                                                                    <path fill-rule="evenodd"
                                                                        d="M3.75 2a.75.75 0 01.75.75V7h7V2.75a.75.75 0 011.5 0v10.5a.75.75 0 01-1.5 0V8.5h-7v4.75a.75.75 0 01-1.5 0V2.75A.75.75 0 013.75 2z">
                                                                    </path>
                                                                </svg>
                                                            </md-header>

                                                            <md-bold tabindex="-1"
                                                                class="toolbar-item tooltipped tooltipped-sw p-2 mx-1 js-modifier-label-key"
                                                                aria-label="Add bold text <cmd-b>"
                                                                data-ga-click="Markdown Toolbar, click, bold" role="button"
                                                                hotkey="b">
                                                                <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1"
                                                                    height="16" width="16" class="octicon octicon-bold">
                                                                    <path fill-rule="evenodd"
                                                                        d="M4 2a1 1 0 00-1 1v10a1 1 0 001 1h5.5a3.5 3.5 0 001.852-6.47A3.5 3.5 0 008.5 2H4zm4.5 5a1.5 1.5 0 100-3H5v3h3.5zM5 9v3h4.5a1.5 1.5 0 000-3H5z">
                                                                    </path>
                                                                </svg>
                                                            </md-bold>

                                                            <md-italic tabindex="-1"
                                                                class="toolbar-item tooltipped tooltipped-sw p-2 mx-1 js-modifier-label-key"
                                                                aria-label="Add italic text <cmd-i>"
                                                                data-ga-click="Markdown Toolbar, click, italic"
                                                                role="button" hotkey="i">
                                                                <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1"
                                                                    height="16" width="16" class="octicon octicon-italic">
                                                                    <path fill-rule="evenodd"
                                                                        d="M6 2.75A.75.75 0 016.75 2h6.5a.75.75 0 010 1.5h-2.505l-3.858 9H9.25a.75.75 0 010 1.5h-6.5a.75.75 0 010-1.5h2.505l3.858-9H6.75A.75.75 0 016 2.75z">
                                                                    </path>
                                                                </svg>
                                                            </md-italic>

                                                            <md-unordered-list tabindex="-1"
                                                                class="toolbar-item tooltipped tooltipped-sw p-2 mx-1"
                                                                aria-label="Add a bulleted list"
                                                                data-ga-click="Markdown Toolbar, click, unordered list"
                                                                role="button">
                                                                <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1"
                                                                    height="16" width="16"
                                                                    class="octicon octicon-list-unordered">
                                                                    <path fill-rule="evenodd"
                                                                        d="M2 4a1 1 0 100-2 1 1 0 000 2zm3.75-1.5a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5zm0 5a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5zm0 5a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5zM3 8a1 1 0 11-2 0 1 1 0 012 0zm-1 6a1 1 0 100-2 1 1 0 000 2z">
                                                                    </path>
                                                                </svg>
                                                            </md-unordered-list>

                                                            <md-ordered-list tabindex="-1"
                                                                class="toolbar-item tooltipped tooltipped-sw p-2 mx-1"
                                                                aria-label="Add a numbered list"
                                                                data-ga-click="Markdown Toolbar, click, ordered list"
                                                                role="button">
                                                                <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1"
                                                                    height="16" width="16"
                                                                    class="octicon octicon-list-ordered">
                                                                    <path fill-rule="evenodd"
                                                                        d="M2.003 2.5a.5.5 0 00-.723-.447l-1.003.5a.5.5 0 00.446.895l.28-.14V6H.5a.5.5 0 000 1h2.006a.5.5 0 100-1h-.503V2.5zM5 3.25a.75.75 0 01.75-.75h8.5a.75.75 0 010 1.5h-8.5A.75.75 0 015 3.25zm0 5a.75.75 0 01.75-.75h8.5a.75.75 0 010 1.5h-8.5A.75.75 0 015 8.25zm0 5a.75.75 0 01.75-.75h8.5a.75.75 0 010 1.5h-8.5a.75.75 0 01-.75-.75zM.924 10.32l.003-.004a.851.851 0 01.144-.153A.66.66 0 011.5 10c.195 0 .306.068.374.146a.57.57 0 01.128.376c0 .453-.269.682-.8 1.078l-.035.025C.692 11.98 0 12.495 0 13.5a.5.5 0 00.5.5h2.003a.5.5 0 000-1H1.146c.132-.197.351-.372.654-.597l.047-.035c.47-.35 1.156-.858 1.156-1.845 0-.365-.118-.744-.377-1.038-.268-.303-.658-.484-1.126-.484-.48 0-.84.202-1.068.392a1.858 1.858 0 00-.348.384l-.007.011-.002.004-.001.002-.001.001a.5.5 0 00.851.525zM.5 10.055l-.427-.26.427.26z">
                                                                    </path>
                                                                </svg>
                                                            </md-ordered-list>

                                                            <md-task-list tabindex="-1"
                                                                class="toolbar-item tooltipped tooltipped-sw p-2 mx-1"
                                                                aria-label="Add a task list"
                                                                data-ga-click="Markdown Toolbar, click, task list"
                                                                role="button" hotkey="L">
                                                                <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1"
                                                                    height="16" width="16" class="octicon octicon-tasklist">
                                                                    <path fill-rule="evenodd"
                                                                        d="M2.5 2.75a.25.25 0 01.25-.25h10.5a.25.25 0 01.25.25v10.5a.25.25 0 01-.25.25H2.75a.25.25 0 01-.25-.25V2.75zM2.75 1A1.75 1.75 0 001 2.75v10.5c0 .966.784 1.75 1.75 1.75h10.5A1.75 1.75 0 0015 13.25V2.75A1.75 1.75 0 0013.25 1H2.75zm9.03 5.28a.75.75 0 00-1.06-1.06L6.75 9.19 5.28 7.72a.75.75 0 00-1.06 1.06l2 2a.75.75 0 001.06 0l4.5-4.5z">
                                                                    </path>
                                                                </svg>
                                                            </md-task-list>
                                                        </div>
                                                    </markdown-toolbar>

                                                </div>

                                                <div class="comment-form-error js-comment-form-error" role="alert"
                                                    hidden="">
                                                    There was an error creating your Discussion.
                                                </div>


                                                <file-attachment class="js-upload-markdown-image is-default">
                                                    <div class="write-content js-write-bucket tooltipped tooltipped-ne tooltipped-no-delay tooltipped-align-left-1 hide-reaction-suggestion upload-enabled mx-0 mt-2 mb-2 mx-md-2 hx_sm-hide-drag-drop js-reaction-suggestion"
                                                        data-reaction-markup="Would you like to leave a reaction instead?">

                                                        <text-expander>

                                                            <textarea name="comment[body]" id="new_comment_field"
                                                                placeholder="Write a comment" aria-label="Comment body"
                                                                data-required-trimmed="Text field is empty"
                                                                class="form-control input-contrast comment-form-textarea js-comment-field js-paste-markdown js-task-list-field js-quick-submit js-size-to-fit js-session-resumable js-saved-reply-shortcut-comment-field"
                                                                required=""></textarea>

                                                        </text-expander>

                                                        <label
                                                            class="text-normal drag-and-drop hx_drag-and-drop position-relative d-flex flex-justify-between">
                                                            <input
                                                                accept=".gif,.jpeg,.jpg,.mov,.mp4,.png,.csv,.docx,.fodg,.fodp,.fods,.fodt,.gz,.log,.md,.odf,.odg,.odp,.ods,.odt,.pdf,.pptx,.txt,.xls,.xlsx,.zip"
                                                                type="file" multiple=""
                                                                class="manual-file-chooser manual-file-chooser-transparent top-0 right-0 bottom-0 left-0 width-full ml-0 form-control rounded-top-0"
                                                                id="fc-new_comment_field">
                                                            <span
                                                                class="color-bg-secondary position-absolute top-0 left-0 rounded-bottom-2 width-full height-full"
                                                                style="pointer-events: none;"></span>
                                                            <span class="position-relative pr-2"
                                                                style="pointer-events: none;">
                                                                <span class="default">

                                                                    Attach files by dragging &amp; dropping, selecting or
                                                                    pasting them.
                                                                </span>
                                                                <span class="loading">
                                                                    <svg style="box-sizing: content-box; color: var(--color-icon-primary);"
                                                                        viewBox="0 0 16 16" fill="none" width="16"
                                                                        height="16"
                                                                        class="v-align-text-bottom mr-1 anim-rotate">
                                                                        <circle cx="8" cy="8" r="7" stroke="currentColor"
                                                                            stroke-opacity="0.25" stroke-width="2"
                                                                            vector-effect="non-scaling-stroke"></circle>
                                                                        <path d="M15 8a7.002 7.002 0 00-7-7"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            vector-effect="non-scaling-stroke"></path>
                                                                    </svg> Uploading your files…
                                                                </span>
                                                                <span class="error bad-file">
                                                                    We don’t support that file type.
                                                                    <span class="drag-and-drop-error-info">
                                                                        <span class="btn-link">Try again</span> with a
                                                                        GIF, JPEG, JPG, MOV, MP4, PNG, CSV, DOCX, FODG,
                                                                        FODP, FODS, FODT, GZ, LOG, MD, ODF, ODG, ODP, ODS,
                                                                        ODT, PDF, PPTX, TXT, XLS, XLSX or ZIP.
                                                                    </span>
                                                                </span>
                                                                <span class="error bad-permissions">
                                                                    Attaching documents requires write permission to this
                                                                    repository.
                                                                    <span class="drag-and-drop-error-info">
                                                                        <span class="btn-link">Try again</span> with a GIF,
                                                                        JPEG, JPG, MOV, MP4, PNG, CSV, DOCX, FODG, FODP,
                                                                        FODS, FODT, GZ, LOG, MD, ODF, ODG, ODP, ODS, ODT,
                                                                        PDF, PPTX, TXT, XLS, XLSX or ZIP.
                                                                    </span>
                                                                </span>
                                                                <span class="error repository-required">
                                                                    We don’t support that file type.
                                                                    <span class="drag-and-drop-error-info">
                                                                        <span class="btn-link">Try again</span> with a GIF,
                                                                        JPEG, JPG, MOV, MP4, PNG, CSV, DOCX, FODG, FODP,
                                                                        FODS, FODT, GZ, LOG, MD, ODF, ODG, ODP, ODS, ODT,
                                                                        PDF, PPTX, TXT, XLS, XLSX or ZIP.
                                                                    </span>
                                                                </span>
                                                                <span class="error too-big">
                                                                    Yowza, that’s a big file.
                                                                    <span class="drag-and-drop-error-info">
                                                                        <span class="btn-link">Try again</span> with a file
                                                                        smaller than 10MB.
                                                                    </span>
                                                                </span>
                                                                <span class="error empty">
                                                                    This file is empty.
                                                                    <span class="drag-and-drop-error-info">
                                                                        <span class="btn-link">Try again</span> with a file
                                                                        that’s not empty.
                                                                    </span>
                                                                </span>
                                                                <span class="error hidden-file">
                                                                    This file is hidden.
                                                                    <span class="drag-and-drop-error-info">
                                                                        <span class="btn-link">Try again</span> with another
                                                                        file.
                                                                    </span>
                                                                </span>
                                                                <span class="error failed-request">
                                                                    Something went really wrong, and we can’t process that
                                                                    file.
                                                                    <span class="drag-and-drop-error-info">
                                                                        <span class="btn-link">Try again.</span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                            <span class="tooltipped tooltipped-nw"
                                                                aria-label="Styling with Markdown is supported">
                                                                <a class="Link--muted position-relative d-inline"
                                                                    href="https://guides.github.com/features/mastering-markdown/"
                                                                    target="_blank"
                                                                    data-ga-click="Markdown Toolbar, click, help"
                                                                    aria-label="Learn about styling with Markdown">
                                                                    <svg class="octicon octicon-markdown v-align-bottom"
                                                                        viewBox="0 0 16 16" version="1.1" width="16"
                                                                        height="16" aria-hidden="true">
                                                                        <path fill-rule="evenodd"
                                                                            d="M14.85 3H1.15C.52 3 0 3.52 0 4.15v7.69C0 12.48.52 13 1.15 13h13.69c.64 0 1.15-.52 1.15-1.15v-7.7C16 3.52 15.48 3 14.85 3zM9 11H7V8L5.5 9.92 4 8v3H2V5h2l1.5 2L7 5h2v6zm2.99.5L9.5 8H11V5h2v3h1.5l-2.51 3.5z">
                                                                        </path>
                                                                    </svg>
                                                                </a>
                                                            </span>
                                                        </label>

                                                    </div>
                                                </file-attachment>
                                                <div role="tabpanel"
                                                    class="js-preview-panel overflow-auto border-bottom mx-0 my-3 mx-md-2 mb-md-2"
                                                    hidden="">
                                                    <div class="comment js-suggested-changes-container" data-thread-side="">
                                                        <div class="comment-body markdown-body js-preview-body">
                                                            <p>Nothing to preview</p>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="comment-form-error mb-2 js-comment-update-error" hidden="">
                                                </div>
                                            </tab-container>


                                            <div class="form-actions m-0 mx-md-2 my-md-2 p-0">
                                                <div id="partial-new-comment-form-actions">
                                                    <div class="d-flex flex-justify-end">
                                                        <div class="d-flex flex-items-center flex-auto mb-3 mb-md-0">
                                                            <a class="tabnav-extra p-0 m-0" target="_blank"
                                                                data-ga-click="Markdown Toolbar, click, help"
                                                                href="https://guides.github.com/features/mastering-markdown/">
                                                                <svg class="octicon octicon-markdown" aria-hidden="true"
                                                                    viewBox="0 0 16 16" version="1.1" height="16"
                                                                    width="16">
                                                                    <path fill-rule="evenodd"
                                                                        d="M14.85 3H1.15C.52 3 0 3.52 0 4.15v7.69C0 12.48.52 13 1.15 13h13.69c.64 0 1.15-.52 1.15-1.15v-7.7C16 3.52 15.48 3 14.85 3zM9 11H7V8L5.5 9.92 4 8v3H2V5h2l1.5 2L7 5h2v6zm2.99.5L9.5 8H11V5h2v3h1.5l-2.51 3.5z">
                                                                    </path>
                                                                </svg>
                                                                Styling with Markdown is supported
                                                            </a>
                                                        </div>

                                                        <div class="color-bg-secondary ml-1 d-flex flex-items-center">
                                                            <button type="submit" class="btn btn-primary"
                                                                data-disable-with="" data-disable-invalid="" disabled="">
                                                                Comment
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                    <div class="text-small color-text-secondary mx-md-2 mt-md-2 mb-2 mt-3">
                                        <svg class="octicon octicon-info mr-1" viewBox="0 0 16 16" version="1.1" width="16"
                                            height="16" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8zm6.5-.25A.75.75 0 017.25 7h1a.75.75 0 01.75.75v2.75h.25a.75.75 0 010 1.5h-2a.75.75 0 010-1.5h.25v-2h-.25a.75.75 0 01-.75-.75zM8 6a1 1 0 100-2 1 1 0 000 2z">
                                            </path>
                                        </svg>Remember, contributions to this repository should follow
                                        its
                                        <a href="/">contributing
                                            guidelines</a>
                                        and
                                        <a href="/">code
                                            of conduct</a>.
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="flex-shrink-0 col-12 col-md-3">
                        <div id="partial-discussion-sidebar" class="mt-3 mt-md-0 js-socket-channel js-updatable-content">

                            <div class="discussion-sidebar-item pt-0">
                                <div>
                                    <div class="discussion-sidebar-item">
                                        <div class="text-bold discussion-sidebar-heading">
                                            Category
                                        </div>
                                        <div
                                            class="d-flex flex-row flex-items-center text-small color-text-primary text-bold">
                                            <div
                                                class="d-flex flex-justify-center flex-items-center bg-discussions-row-emoji-box-small rounded-2 flex-shrink-0 mr-2">
                                                <span class="tooltipped tooltipped-e" aria-label="Help">
                                                    <g-emoji alias="pray"
                                                        fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f64f.png"
                                                        class="f5">🙏</g-emoji>
                                                </span>
                                            </div>
                                            Help
                                        </div>
                                    </div>

                                </div>
                            </div>



                            <div id="partial-users-participants" class="discussion-sidebar-item">
                                <div class="participation">
                                    <div class="discussion-sidebar-heading text-bold">
                                        3 participants
                                    </div>
                                    <div class="participation-avatars d-flex flex-wrap">
                                        <a class="participant-avatar" href="/bahdcoder">
                                            <img src="https://avatars.githubusercontent.com/u/2189038?s=60&amp;v=4"
                                                alt="@bahdcoder" size="24" height="24" width="24"
                                                class="avatar-user avatar ">
                                        </a> <a class="participant-avatar" href="/ekazda">
                                            <img src="https://avatars.githubusercontent.com/u/1107804?s=60&amp;v=4"
                                                alt="@ekazda" size="24" height="24" width="24" class="avatar-user avatar ">
                                        </a> <a class="participant-avatar" href="/rohanfaiyazkhan">
                                            <img src="https://avatars.githubusercontent.com/u/27079112?s=60&amp;v=4"
                                                alt="@rohanfaiyazkhan" size="24" height="24" width="24"
                                                class="avatar-user avatar ">
                                        </a>
                                    </div>
                                </div>
                            </div>



                            <div class="discussion-sidebar-item sidebar-notifications">
                                <div class="thread-subscription-status js-socket-channel js-updatable-content">
                                    <div class="discussion-sidebar-heading text-bold mt-n1 py-1 mb-1">
                                        Notifications
                                    </div>
                                    <form data-replace-remote-form="true" class="thread-subscribe-form" <button
                                        type="submit" class="btn btn-block btn-sm thread-subscribe-button">
                                        <svg class="octicon octicon-bell" height="16" viewBox="0 0 16 16" version="1.1"
                                            width="16" aria-hidden="true">
                                            <path
                                                d="M8 16a2 2 0 001.985-1.75c.017-.137-.097-.25-.235-.25h-3.5c-.138 0-.252.113-.235.25A2 2 0 008 16z">
                                            </path>
                                            <path fill-rule="evenodd"
                                                d="M8 1.5A3.5 3.5 0 004.5 5v2.947c0 .346-.102.683-.294.97l-1.703 2.556a.018.018 0 00-.003.01l.001.006c0 .002.002.004.004.006a.017.017 0 00.006.004l.007.001h10.964l.007-.001a.016.016 0 00.006-.004.016.016 0 00.004-.006l.001-.007a.017.017 0 00-.003-.01l-1.703-2.554a1.75 1.75 0 01-.294-.97V5A3.5 3.5 0 008 1.5zM3 5a5 5 0 0110 0v2.947c0 .05.015.098.042.139l1.703 2.555A1.518 1.518 0 0113.482 13H2.518a1.518 1.518 0 01-1.263-2.36l1.703-2.554A.25.25 0 003 7.947V5z">
                                            </path>
                                        </svg> Subscribe
                                        </button>
                                    </form>
                                    <p class="reason text-small color-text-secondary">You’re not receiving notifications
                                        from this thread.</p>
                                </div>

                            </div>









                            <div id="sidebar-events" class="discussion-sidebar-item">
                                <h5 class="mb-3">Events</h5>

                                <div id="paginated-discussion-events-list">
                                    <div class="discussion-event-wrapper">
                                        <div id="event-15488"
                                            class="TimelineItem discussion-event-timeline-item p-0 pb-3 d-flex flex-items-start">
                                            <div
                                                class="TimelineItem-badge sidebar-emoji-box color-bg-primary mr-1 color-text-success">
                                                <svg class="octicon octicon-check-circle-fill" viewBox="0 0 16 16"
                                                    version="1.1" width="16" height="16" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M8 16A8 8 0 108 0a8 8 0 000 16zm3.78-9.72a.75.75 0 00-1.06-1.06L6.75 9.19 5.28 7.72a.75.75 0 00-1.06 1.06l2 2a.75.75 0 001.06 0l4.5-4.5z">
                                                    </path>
                                                </svg>
                                            </div>

                                            <div class="TimelineItem-body m-0">
                                                <strong class="css-truncate">
                                                    <a href="/bahdcoder"
                                                        class="author Link--primary css-truncate-target width-fit">
                                                        bahdcoder
                                                    </a>

                                                </strong>


                                                Marked
                                                <span>
                                                    an
                                                    <a href="/" class="Link--primary">
                                                        Answer
                                                    </a>
                                                </span>



                                                <span class="color-text-tertiary">
                                                    <time-ago datetime="2020-12-01T10:41:00Z" format="micro"
                                                        class="no-wrap " title="1 Dec 2020, 11:41 GMT+1">159d</time-ago>
                                                </span>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>


        </div>
    </div>
@endsection
