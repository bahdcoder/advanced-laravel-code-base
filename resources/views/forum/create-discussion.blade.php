@extends('forum.layouts.main')


@section('content')
    <div data-discussion-hovercards-enabled="true" data-issue-and-pr-hovercards-enabled="true"
        data-project-hovercards-enabled="true" class="gutter-condensed gutter-lg flex-column flex-md-row d-flex">

        <div class="flex-shrink-0 col-12 col-md-9 mb-4 mb-md-0">
            <div class="timeline-comment-wrapper timeline-new-comment composer composer-responsive">
                <h2 class="pb-2"> Start a new discussion </h2>
                <div>
                    <div class="d-flex flex-row discussion-topic-header p-0 py-md-2 mb-3 mb-md-0">

                        <div class="form-group js-remove-error-state-on-click m-0">
                            <input class="form-control sr-only" error="false"
                                aria-label="Please select a category from the dropdown" type="text"
                                name="discussion[category_id]" id="discussion_category_id">
                            <details class="details-reset details-overlay js-discussion-category-select mr-2">
                                <summary class="btn discussion-category-picker" title="Select category"
                                    aria-describedby="category-input-validation" aria-haspopup="menu" role="button">
                                    <span class="mr-3" id="category-select-header" style="max-width: 135px">
                                        Select Category
                                    </span> <span class="dropdown-caret"></span>
                                </summary>
                                <details-menu class="SelectMenu" role="menu">
                                    <div class="SelectMenu-modal">
                                        <div class="SelectMenu-list">
                                            <button type="button" class="SelectMenu-item discussion-category-65332"
                                                role="menuitem" id="65332" data-category-name="General">
                                                <div
                                                    class="d-flex flex-justify-center flex-items-center bg-discussions-row-emoji-box rounded-2 flex-shrink-0">
                                                    <span
                                                        class="d-flex flex-items-center tooltipped tooltipped-e color-text-tertiary">
                                                        <g-emoji alias="hash"
                                                            fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/0023-20e3.png"
                                                            class="js-discussion-category-emoji d-flex flex-items-center f4">
                                                            #️⃣</g-emoji>
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-column p-2" title="General">
                                                    <div class="css-truncate css-truncate-target h5"
                                                        style="max-width: 210px;">
                                                        General
                                                    </div>
                                                    <div class="break-word">
                                                        Chat that doesn't fit anywhere else
                                                    </div>
                                                </div>
                                            </button>
                                            <button type="button" class="SelectMenu-item discussion-category-65334"
                                                role="menuitem" id="65334" data-category-name="Help">
                                                <div
                                                    class="d-flex flex-justify-center flex-items-center bg-discussions-row-emoji-box rounded-2 flex-shrink-0">
                                                    <span
                                                        class="d-flex flex-items-center tooltipped tooltipped-e color-text-tertiary">
                                                        <g-emoji alias="pray"
                                                            fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f64f.png"
                                                            class="js-discussion-category-emoji d-flex flex-items-center f4">
                                                            🙏</g-emoji>
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-column p-2" title="Help">
                                                    <div class="css-truncate css-truncate-target h5"
                                                        style="max-width: 210px;">
                                                        Help
                                                    </div>
                                                    <div class="break-word">
                                                        Ask the community for help
                                                    </div>
                                                    <div class="text-bold color-text-success">
                                                        Answers enabled
                                                    </div>
                                                </div>
                                            </button>
                                            <button type="button" class="SelectMenu-item discussion-category-65335"
                                                role="menuitem" id="65335" data-category-name="Ideas">
                                                <div
                                                    class="d-flex flex-justify-center flex-items-center bg-discussions-row-emoji-box rounded-2 flex-shrink-0">
                                                    <span
                                                        class="d-flex flex-items-center tooltipped tooltipped-e color-text-tertiary">
                                                        <g-emoji alias="bulb"
                                                            fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f4a1.png"
                                                            class="js-discussion-category-emoji d-flex flex-items-center f4">
                                                            💡</g-emoji>
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-column p-2" title="Ideas">
                                                    <div class="css-truncate css-truncate-target h5"
                                                        style="max-width: 210px;">
                                                        Ideas
                                                    </div>
                                                    <div class="break-word">
                                                        Share ideas for new features
                                                    </div>
                                                </div>
                                            </button>
                                            <button type="button" class="SelectMenu-item discussion-category-32231828"
                                                role="menuitem" id="32231828" data-category-name="Kind words">
                                                <div
                                                    class="d-flex flex-justify-center flex-items-center bg-discussions-row-emoji-box rounded-2 flex-shrink-0">
                                                    <span
                                                        class="d-flex flex-items-center tooltipped tooltipped-e color-text-tertiary">
                                                        <g-emoji alias="heart"
                                                            fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/2764.png"
                                                            class="js-discussion-category-emoji d-flex flex-items-center f4">
                                                            ❤️</g-emoji>
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-column p-2" title="Kind words">
                                                    <div class="css-truncate css-truncate-target h5"
                                                        style="max-width: 210px;">
                                                        Kind words
                                                    </div>
                                                    <div class="break-word">
                                                        We mostly hear from people having issues, so it's lovely to hear
                                                        from people who are having great experiences
                                                    </div>
                                                </div>
                                            </button>
                                            <button type="button" class="SelectMenu-item discussion-category-65336"
                                                role="menuitem" id="65336" data-category-name="Show and tell">
                                                <div
                                                    class="d-flex flex-justify-center flex-items-center bg-discussions-row-emoji-box rounded-2 flex-shrink-0">
                                                    <span
                                                        class="d-flex flex-items-center tooltipped tooltipped-e color-text-tertiary">
                                                        <g-emoji alias="raised_hands"
                                                            fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f64c.png"
                                                            class="js-discussion-category-emoji d-flex flex-items-center f4">
                                                            🙌</g-emoji>
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-column p-2" title="Show and tell">
                                                    <div class="css-truncate css-truncate-target h5"
                                                        style="max-width: 210px;">
                                                        Show and tell
                                                    </div>
                                                    <div class="break-word">
                                                        Show off something you've made
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </details-menu>
                            </details>
                        </div>

                        <div class="form-group js-remove-error-state-on-click width-full m-0">
                            <input
                                class="form-control input-lg input-block input-contrast required title js-session-resumable width-full"
                                error="false" autofocus="autofocus" autocomplete="off" placeholder="Title"
                                aria-label="Title" aria-describedby="title-input-validation" type="text"
                                name="discussion[title]" id="discussion_title">
                        </div>
                    </div>

                    <div class="border rounded js-slash-command-surface">
                        <tab-container class="js-previewable-comment-form previewable-comment-form write-selected"
                            data-preview-url="/preview?markdown_unsupported=false&amp;repository=106017343&amp;subject=&amp;subject_type=Discussion">
                            <input type="hidden"
                                value="EKOIvz8pgPHLCAt15/8K3XHDRzluPMAXpd/TR6RO7alWBVwuT4J0tUqsUIMONU3zvOjpI+Nxn7fwo6gPBO7SWA=="
                                data-csrf="true" class="js-data-preview-url-csrf">
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
                                <markdown-toolbar role="toolbar" aria-label="Composition" for="discussion_body"
                                    class="js-details-container Details toolbar-commenting d-flex no-wrap flex-items-start flex-wrap px-2 pt-2 pt-lg-0 border-md-top border-lg-top-0"
                                    tabindex="0">
                                    <div class="d-block d-md-none flex-auto">
                                        <button data-md-button="" tabindex="-1" type="button" aria-label="Toggle text tools"
                                            aria-expanded="false"
                                            class="js-details-target btn-link toolbar-item no-underline py-2 mr-1">
                                            <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16"
                                                class="octicon octicon-typography">
                                                <path fill-rule="evenodd"
                                                    d="M6.21 8.5L4.574 3.594 2.857 8.5H6.21zm.5 1.5l.829 2.487a.75.75 0 001.423-.474L5.735 2.332a1.216 1.216 0 00-2.302-.018l-3.39 9.688a.75.75 0 001.415.496L2.332 10H6.71zm3.13-4.358C10.53 4.374 11.87 4 13 4c1.5 0 3 .939 3 2.601v5.649a.75.75 0 01-1.448.275C13.995 12.82 13.3 13 12.5 13c-.77 0-1.514-.231-2.078-.709-.577-.488-.922-1.199-.922-2.041 0-.694.265-1.411.887-1.944C11 7.78 11.88 7.5 13 7.5h1.5v-.899c0-.54-.5-1.101-1.5-1.101-.869 0-1.528.282-1.84.858a.75.75 0 11-1.32-.716zM14.5 9H13c-.881 0-1.375.22-1.637.444-.253.217-.363.5-.363.806 0 .408.155.697.39.896.249.21.63.354 1.11.354.732 0 1.26-.209 1.588-.449.35-.257.412-.495.412-.551V9z">
                                                </path>
                                            </svg>
                                            <svg class="octicon octicon-chevron-up Details-content--shown"
                                                viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M3.22 9.78a.75.75 0 010-1.06l4.25-4.25a.75.75 0 011.06 0l4.25 4.25a.75.75 0 01-1.06 1.06L8 6.06 4.28 9.78a.75.75 0 01-1.06 0z">
                                                </path>
                                            </svg>
                                            <svg class="octicon octicon-chevron-down Details-content--hidden"
                                                viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M12.78 6.22a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06 0L3.22 7.28a.75.75 0 011.06-1.06L8 9.94l3.72-3.72a.75.75 0 011.06 0z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>



                                    <div class="flex-nowrap d-none d-md-inline-block mr-3">
                                        <md-header tabindex="-1" class="toolbar-item tooltipped tooltipped-sw mx-1"
                                            aria-label="Add header text" data-ga-click="Markdown Toolbar, click, header"
                                            role="button">
                                            <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16"
                                                class="octicon octicon-heading">
                                                <path fill-rule="evenodd"
                                                    d="M3.75 2a.75.75 0 01.75.75V7h7V2.75a.75.75 0 011.5 0v10.5a.75.75 0 01-1.5 0V8.5h-7v4.75a.75.75 0 01-1.5 0V2.75A.75.75 0 013.75 2z">
                                                </path>
                                            </svg>
                                        </md-header>

                                        <md-bold tabindex="-1"
                                            class="toolbar-item tooltipped tooltipped-sw mx-1 js-modifier-label-key"
                                            aria-label="Add bold text <cmd-b>" data-ga-click="Markdown Toolbar, click, bold"
                                            role="button" hotkey="b">
                                            <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16"
                                                class="octicon octicon-bold">
                                                <path fill-rule="evenodd"
                                                    d="M4 2a1 1 0 00-1 1v10a1 1 0 001 1h5.5a3.5 3.5 0 001.852-6.47A3.5 3.5 0 008.5 2H4zm4.5 5a1.5 1.5 0 100-3H5v3h3.5zM5 9v3h4.5a1.5 1.5 0 000-3H5z">
                                                </path>
                                            </svg>
                                        </md-bold>

                                        <md-italic tabindex="-1"
                                            class="toolbar-item tooltipped tooltipped-sw mx-1 js-modifier-label-key"
                                            aria-label="Add italic text <cmd-i>"
                                            data-ga-click="Markdown Toolbar, click, italic" role="button" hotkey="i">
                                            <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16"
                                                class="octicon octicon-italic">
                                                <path fill-rule="evenodd"
                                                    d="M6 2.75A.75.75 0 016.75 2h6.5a.75.75 0 010 1.5h-2.505l-3.858 9H9.25a.75.75 0 010 1.5h-6.5a.75.75 0 010-1.5h2.505l3.858-9H6.75A.75.75 0 016 2.75z">
                                                </path>
                                            </svg>
                                        </md-italic>
                                    </div>

                                    <div class="d-flex d-md-inline-block mr-0 mr-md-3">
                                        <md-quote tabindex="-1"
                                            class="toolbar-item tooltipped tooltipped-sw p-2 p-md-1 mx-1"
                                            aria-label="Insert a quote" data-ga-click="Markdown Toolbar, click, quote"
                                            role="button">
                                            <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16"
                                                class="octicon octicon-quote">
                                                <path fill-rule="evenodd"
                                                    d="M1.75 2.5a.75.75 0 000 1.5h10.5a.75.75 0 000-1.5H1.75zm4 5a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5zm0 5a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5zM2.5 7.75a.75.75 0 00-1.5 0v6a.75.75 0 001.5 0v-6z">
                                                </path>
                                            </svg>
                                        </md-quote>

                                        <md-code tabindex="-1"
                                            class="toolbar-item tooltipped tooltipped-sw js-modifier-label-key p-2 p-md-1 mx-1"
                                            aria-label="Insert code <cmd-e>" data-ga-click="Markdown Toolbar, click, code"
                                            role="button" hotkey="e">
                                            <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16"
                                                class="octicon octicon-code">
                                                <path fill-rule="evenodd"
                                                    d="M4.72 3.22a.75.75 0 011.06 1.06L2.06 8l3.72 3.72a.75.75 0 11-1.06 1.06L.47 8.53a.75.75 0 010-1.06l4.25-4.25zm6.56 0a.75.75 0 10-1.06 1.06L13.94 8l-3.72 3.72a.75.75 0 101.06 1.06l4.25-4.25a.75.75 0 000-1.06l-4.25-4.25z">
                                                </path>
                                            </svg>
                                        </md-code>

                                        <button type="button" data-md-button="" tabindex="-1"
                                            class="toolbar-item text-center menu-target p-2 mx-1 d-md-none js-markdown-link-button"
                                            aria-label="Add a link" data-ga-click="Markdown Toolbar, click, saved reply">
                                            <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16"
                                                class="octicon octicon-link">
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
                                                    <label class="d-block mb-1" for="js-dialog-link-text">Link Text</label>
                                                    <input type="text" class="mb-3 form-control input-block"
                                                        id="js-dialog-link-text" autofocus="">
                                                </div>
                                                <div>
                                                    <label class="d-block mb-1" for="js-dialog-link-href">URL</label>
                                                    <input type="url" class="mb-3 form-control input-block"
                                                        id="js-dialog-link-href">
                                                </div>
                                                <div class="pt-3 border-top">
                                                    <button type="button"
                                                        class="btn btn-primary btn-block js-markdown-link-insert"
                                                        data-close-dialog="" data-for-textarea="discussion_body">
                                                        Add
                                                    </button>
                                                </div>
                                            </div>
                                        </template>

                                        <md-link tabindex="-1"
                                            class="toolbar-item tooltipped tooltipped-sw p-2 p-md-1 d-none d-md-block mx-1 js-modifier-label-key"
                                            aria-label="Add a link <cmd-k>" data-ga-click="Markdown Toolbar, click, link"
                                            role="button" hotkey="k">
                                            <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16"
                                                class="octicon octicon-link">
                                                <path fill-rule="evenodd"
                                                    d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z">
                                                </path>
                                            </svg>
                                        </md-link>
                                    </div>

                                    <div class="d-none d-md-inline-block mr-3">
                                        <md-unordered-list tabindex="-1" class="toolbar-item tooltipped tooltipped-sw mx-1"
                                            aria-label="Add a bulleted list"
                                            data-ga-click="Markdown Toolbar, click, unordered list" role="button">
                                            <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16"
                                                class="octicon octicon-list-unordered">
                                                <path fill-rule="evenodd"
                                                    d="M2 4a1 1 0 100-2 1 1 0 000 2zm3.75-1.5a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5zm0 5a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5zm0 5a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5zM3 8a1 1 0 11-2 0 1 1 0 012 0zm-1 6a1 1 0 100-2 1 1 0 000 2z">
                                                </path>
                                            </svg>
                                        </md-unordered-list>

                                        <md-ordered-list tabindex="-1" class="toolbar-item tooltipped tooltipped-sw mx-1"
                                            aria-label="Add a numbered list"
                                            data-ga-click="Markdown Toolbar, click, ordered list" role="button">
                                            <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16"
                                                class="octicon octicon-list-ordered">
                                                <path fill-rule="evenodd"
                                                    d="M2.003 2.5a.5.5 0 00-.723-.447l-1.003.5a.5.5 0 00.446.895l.28-.14V6H.5a.5.5 0 000 1h2.006a.5.5 0 100-1h-.503V2.5zM5 3.25a.75.75 0 01.75-.75h8.5a.75.75 0 010 1.5h-8.5A.75.75 0 015 3.25zm0 5a.75.75 0 01.75-.75h8.5a.75.75 0 010 1.5h-8.5A.75.75 0 015 8.25zm0 5a.75.75 0 01.75-.75h8.5a.75.75 0 010 1.5h-8.5a.75.75 0 01-.75-.75zM.924 10.32l.003-.004a.851.851 0 01.144-.153A.66.66 0 011.5 10c.195 0 .306.068.374.146a.57.57 0 01.128.376c0 .453-.269.682-.8 1.078l-.035.025C.692 11.98 0 12.495 0 13.5a.5.5 0 00.5.5h2.003a.5.5 0 000-1H1.146c.132-.197.351-.372.654-.597l.047-.035c.47-.35 1.156-.858 1.156-1.845 0-.365-.118-.744-.377-1.038-.268-.303-.658-.484-1.126-.484-.48 0-.84.202-1.068.392a1.858 1.858 0 00-.348.384l-.007.011-.002.004-.001.002-.001.001a.5.5 0 00.851.525zM.5 10.055l-.427-.26.427.26z">
                                                </path>
                                            </svg>
                                        </md-ordered-list>

                                        <md-task-list tabindex="-1" class="toolbar-item tooltipped tooltipped-sw mx-1"
                                            aria-label="Add a task list" data-ga-click="Markdown Toolbar, click, task list"
                                            role="button" hotkey="L">
                                            <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16"
                                                class="octicon octicon-tasklist">
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
                                            data-ga-click="Markdown Toolbar, click, mention" role="button">
                                            <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16"
                                                class="octicon octicon-mention">
                                                <path fill-rule="evenodd"
                                                    d="M4.75 2.37a6.5 6.5 0 006.5 11.26.75.75 0 01.75 1.298 8 8 0 113.994-7.273.754.754 0 01.006.095v1.5a2.75 2.75 0 01-5.072 1.475A4 4 0 1112 8v1.25a1.25 1.25 0 002.5 0V7.867a6.5 6.5 0 00-9.75-5.496V2.37zM10.5 8a2.5 2.5 0 10-5 0 2.5 2.5 0 005 0z">
                                                </path>
                                            </svg>
                                        </md-mention>

                                        <label for="fc-discussion_body" data-md-button="" tabindex="-1"
                                            class="d-block d-md-none btn-link flex-auto text-center toolbar-item tooltipped tooltipped-sw p-2 mx-1"
                                            aria-label="Attach an image">
                                            <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16"
                                                class="octicon octicon-image">
                                                <path fill-rule="evenodd"
                                                    d="M1.75 2.5a.25.25 0 00-.25.25v10.5c0 .138.112.25.25.25h.94a.76.76 0 01.03-.03l6.077-6.078a1.75 1.75 0 012.412-.06L14.5 10.31V2.75a.25.25 0 00-.25-.25H1.75zm12.5 11H4.81l5.048-5.047a.25.25 0 01.344-.009l4.298 3.889v.917a.25.25 0 01-.25.25zm1.75-.25V2.75A1.75 1.75 0 0014.25 1H1.75A1.75 1.75 0 000 2.75v10.5C0 14.216.784 15 1.75 15h12.5A1.75 1.75 0 0016 13.25zM5.5 6a.5.5 0 11-1 0 .5.5 0 011 0zM7 6a2 2 0 11-4 0 2 2 0 014 0z">
                                                </path>
                                            </svg>
                                        </label>

                                        <md-ref tabindex="-1"
                                            class="flex-auto text-center toolbar-item tooltipped tooltipped-sw p-2 p-md-1 mx-1"
                                            aria-label="Reference an issue, pull request, or discussion"
                                            data-ga-click="Markdown Toolbar, click, reference" role="button">
                                            <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16"
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
                                                data-ga-click="Markdown Toolbar, click, saved reply" aria-haspopup="menu"
                                                role="button">
                                                <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16"
                                                    width="16" class="octicon octicon-reply">
                                                    <path fill-rule="evenodd"
                                                        d="M6.78 1.97a.75.75 0 010 1.06L3.81 6h6.44A4.75 4.75 0 0115 10.75v2.5a.75.75 0 01-1.5 0v-2.5a3.25 3.25 0 00-3.25-3.25H3.81l2.97 2.97a.75.75 0 11-1.06 1.06L1.47 7.28a.75.75 0 010-1.06l4.25-4.25a.75.75 0 011.06 0z">
                                                    </path>
                                                </svg>
                                                <span class="dropdown-caret hide-sm"></span>
                                            </summary>

                                            <details-menu style="z-index: 99;"
                                                class="select-menu-modal position-absolute right-0 js-saved-reply-menu hx_rsm-modal"
                                                data-menu-input="discussion_body_saved_reply_id"
                                                src="/settings/replies?context=new_discussion" preload="" role="menu">
                                                <div class="select-menu-header d-flex">
                                                    <span class="select-menu-title flex-auto">Select a reply</span>
                                                    <code><span class="border rounded p-1 mr-2">ctrl .</span></code>
                                                </div>

                                                <include-fragment role="menuitem" aria-label="Loading">
                                                    <svg style="box-sizing: content-box; color: var(--color-icon-primary);"
                                                        viewBox="0 0 16 16" fill="none" width="32" height="32"
                                                        class="my-6 mx-auto d-block anim-rotate">
                                                        <circle cx="8" cy="8" r="7" stroke="currentColor"
                                                            stroke-opacity="0.25" stroke-width="2"
                                                            vector-effect="non-scaling-stroke"></circle>
                                                        <path d="M15 8a7.002 7.002 0 00-7-7" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            vector-effect="non-scaling-stroke"></path>
                                                    </svg>
                                                </include-fragment>

                                            </details-menu>
                                        </details>

                                    </div>


                                    <div class="Details-content--hidden d-block d-md-none width-full">
                                        <md-header tabindex="-1"
                                            class="toolbar-item tooltipped tooltipped-sw py-2 pr-2 pl-1 mr-1"
                                            aria-label="Add header text" data-ga-click="Markdown Toolbar, click, header"
                                            role="button">
                                            <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16"
                                                class="octicon octicon-heading">
                                                <path fill-rule="evenodd"
                                                    d="M3.75 2a.75.75 0 01.75.75V7h7V2.75a.75.75 0 011.5 0v10.5a.75.75 0 01-1.5 0V8.5h-7v4.75a.75.75 0 01-1.5 0V2.75A.75.75 0 013.75 2z">
                                                </path>
                                            </svg>
                                        </md-header>

                                        <md-bold tabindex="-1"
                                            class="toolbar-item tooltipped tooltipped-sw p-2 mx-1 js-modifier-label-key"
                                            aria-label="Add bold text <cmd-b>" data-ga-click="Markdown Toolbar, click, bold"
                                            role="button" hotkey="b">
                                            <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16"
                                                class="octicon octicon-bold">
                                                <path fill-rule="evenodd"
                                                    d="M4 2a1 1 0 00-1 1v10a1 1 0 001 1h5.5a3.5 3.5 0 001.852-6.47A3.5 3.5 0 008.5 2H4zm4.5 5a1.5 1.5 0 100-3H5v3h3.5zM5 9v3h4.5a1.5 1.5 0 000-3H5z">
                                                </path>
                                            </svg>
                                        </md-bold>

                                        <md-italic tabindex="-1"
                                            class="toolbar-item tooltipped tooltipped-sw p-2 mx-1 js-modifier-label-key"
                                            aria-label="Add italic text <cmd-i>"
                                            data-ga-click="Markdown Toolbar, click, italic" role="button" hotkey="i">
                                            <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16"
                                                class="octicon octicon-italic">
                                                <path fill-rule="evenodd"
                                                    d="M6 2.75A.75.75 0 016.75 2h6.5a.75.75 0 010 1.5h-2.505l-3.858 9H9.25a.75.75 0 010 1.5h-6.5a.75.75 0 010-1.5h2.505l3.858-9H6.75A.75.75 0 016 2.75z">
                                                </path>
                                            </svg>
                                        </md-italic>

                                        <md-unordered-list tabindex="-1"
                                            class="toolbar-item tooltipped tooltipped-sw p-2 mx-1"
                                            aria-label="Add a bulleted list"
                                            data-ga-click="Markdown Toolbar, click, unordered list" role="button">
                                            <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16"
                                                class="octicon octicon-list-unordered">
                                                <path fill-rule="evenodd"
                                                    d="M2 4a1 1 0 100-2 1 1 0 000 2zm3.75-1.5a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5zm0 5a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5zm0 5a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5zM3 8a1 1 0 11-2 0 1 1 0 012 0zm-1 6a1 1 0 100-2 1 1 0 000 2z">
                                                </path>
                                            </svg>
                                        </md-unordered-list>

                                        <md-ordered-list tabindex="-1"
                                            class="toolbar-item tooltipped tooltipped-sw p-2 mx-1"
                                            aria-label="Add a numbered list"
                                            data-ga-click="Markdown Toolbar, click, ordered list" role="button">
                                            <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16"
                                                class="octicon octicon-list-ordered">
                                                <path fill-rule="evenodd"
                                                    d="M2.003 2.5a.5.5 0 00-.723-.447l-1.003.5a.5.5 0 00.446.895l.28-.14V6H.5a.5.5 0 000 1h2.006a.5.5 0 100-1h-.503V2.5zM5 3.25a.75.75 0 01.75-.75h8.5a.75.75 0 010 1.5h-8.5A.75.75 0 015 3.25zm0 5a.75.75 0 01.75-.75h8.5a.75.75 0 010 1.5h-8.5A.75.75 0 015 8.25zm0 5a.75.75 0 01.75-.75h8.5a.75.75 0 010 1.5h-8.5a.75.75 0 01-.75-.75zM.924 10.32l.003-.004a.851.851 0 01.144-.153A.66.66 0 011.5 10c.195 0 .306.068.374.146a.57.57 0 01.128.376c0 .453-.269.682-.8 1.078l-.035.025C.692 11.98 0 12.495 0 13.5a.5.5 0 00.5.5h2.003a.5.5 0 000-1H1.146c.132-.197.351-.372.654-.597l.047-.035c.47-.35 1.156-.858 1.156-1.845 0-.365-.118-.744-.377-1.038-.268-.303-.658-.484-1.126-.484-.48 0-.84.202-1.068.392a1.858 1.858 0 00-.348.384l-.007.011-.002.004-.001.002-.001.001a.5.5 0 00.851.525zM.5 10.055l-.427-.26.427.26z">
                                                </path>
                                            </svg>
                                        </md-ordered-list>

                                        <md-task-list tabindex="-1" class="toolbar-item tooltipped tooltipped-sw p-2 mx-1"
                                            aria-label="Add a task list" data-ga-click="Markdown Toolbar, click, task list"
                                            role="button" hotkey="L">
                                            <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16"
                                                class="octicon octicon-tasklist">
                                                <path fill-rule="evenodd"
                                                    d="M2.5 2.75a.25.25 0 01.25-.25h10.5a.25.25 0 01.25.25v10.5a.25.25 0 01-.25.25H2.75a.25.25 0 01-.25-.25V2.75zM2.75 1A1.75 1.75 0 001 2.75v10.5c0 .966.784 1.75 1.75 1.75h10.5A1.75 1.75 0 0015 13.25V2.75A1.75 1.75 0 0013.25 1H2.75zm9.03 5.28a.75.75 0 00-1.06-1.06L6.75 9.19 5.28 7.72a.75.75 0 00-1.06 1.06l2 2a.75.75 0 001.06 0l4.5-4.5z">
                                                </path>
                                            </svg>
                                        </md-task-list>
                                    </div>
                                </markdown-toolbar>

                            </div>

                            <div class="comment-form-error js-comment-form-error" role="alert" hidden="">
                                There was an error creating your Discussion.
                            </div>


                            <file-attachment class="js-upload-markdown-image is-default" input="fc-discussion_body"
                                role="tabpanel" data-tab-container-no-tabstop="true" data-upload-repository-id="106017343"
                                data-upload-policy-url="/upload/policies/assets"><input type="hidden"
                                    value="D+qkYIuNjdVR43j+Tm5a468Nqa++ajcowJHElgyly3imbM6lhPPtvqADQlsLcyWJz2OO+xlRKhc0qnsHFeEWWg=="
                                    data-csrf="true" class="js-data-upload-policy-url-csrf">
                                <div class="write-content js-write-bucket tooltipped tooltipped-ne tooltipped-no-delay tooltipped-align-left-1 hide-reaction-suggestion upload-enabled mx-0 mt-2 mb-2 mx-md-2 hx_sm-hide-drag-drop js-reaction-suggestion"
                                    data-reaction-markup="Would you like to leave a reaction instead?">
                                    <input type="hidden" name="saved_reply_id" id="discussion_body_saved_reply_id"
                                        class="js-resettable-field" value="" data-reset-value="">

                                    <text-expander keys=": @ #"
                                        data-issue-url="/suggestions/discussion?issue_suggester=1&amp;repository=tailwindcss&amp;user_id=tailwindlabs"
                                        data-mention-url="/suggestions/discussion?mention_suggester=1&amp;repository=tailwindcss&amp;user_id=tailwindlabs"
                                        multiword="#" data-emoji-url="/autocomplete/emoji">

                                        <div class="form-group js-remove-error-state-on-click m-0">
                                            <textarea name="discussion[body]" id="discussion_body"
                                                placeholder="Ask a question or start a conversation"
                                                aria-label="Comment body"
                                                class="form-control input-contrast comment-form-textarea js-comment-field js-paste-markdown js-task-list-field js-quick-submit js-size-to-fit js-session-resumable js-saved-reply-shortcut-comment-field"
                                                aria-describedby="body-input-validation"></textarea>

                                        </div>
                                    </text-expander>

                                    <label
                                        class="text-normal drag-and-drop hx_drag-and-drop position-relative d-flex flex-justify-between">
                                        <input
                                            accept=".gif,.jpeg,.jpg,.mov,.mp4,.png,.csv,.docx,.fodg,.fodp,.fods,.fodt,.gz,.log,.md,.odf,.odg,.odp,.ods,.odt,.pdf,.pptx,.txt,.xls,.xlsx,.zip"
                                            type="file" multiple=""
                                            class="manual-file-chooser manual-file-chooser-transparent top-0 right-0 bottom-0 left-0 width-full ml-0 form-control rounded-top-0"
                                            id="fc-discussion_body">
                                        <span
                                            class="color-bg-secondary position-absolute top-0 left-0 rounded-bottom-2 width-full height-full"
                                            style="pointer-events: none;"></span>
                                        <span class="position-relative pr-2" style="pointer-events: none;">
                                            <span class="default">

                                                Attach files by dragging &amp; dropping, selecting or pasting them.
                                            </span>
                                            <span class="loading">
                                                <svg style="box-sizing: content-box; color: var(--color-icon-primary);"
                                                    viewBox="0 0 16 16" fill="none" width="16" height="16"
                                                    class="v-align-text-bottom mr-1 anim-rotate">
                                                    <circle cx="8" cy="8" r="7" stroke="currentColor" stroke-opacity="0.25"
                                                        stroke-width="2" vector-effect="non-scaling-stroke"></circle>
                                                    <path d="M15 8a7.002 7.002 0 00-7-7" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        vector-effect="non-scaling-stroke"></path>
                                                </svg> Uploading your files…
                                            </span>
                                            <span class="error bad-file">
                                                We don’t support that file type.
                                                <span class="drag-and-drop-error-info">
                                                    <span class="btn-link">Try again</span> with a
                                                    GIF, JPEG, JPG, MOV, MP4, PNG, CSV, DOCX, FODG, FODP, FODS, FODT, GZ,
                                                    LOG, MD, ODF, ODG, ODP, ODS, ODT, PDF, PPTX, TXT, XLS, XLSX or ZIP.
                                                </span>
                                            </span>
                                            <span class="error bad-permissions">
                                                Attaching documents requires write permission to this repository.
                                                <span class="drag-and-drop-error-info">
                                                    <span class="btn-link">Try again</span> with a GIF, JPEG, JPG, MOV, MP4,
                                                    PNG, CSV, DOCX, FODG, FODP, FODS, FODT, GZ, LOG, MD, ODF, ODG, ODP, ODS,
                                                    ODT, PDF, PPTX, TXT, XLS, XLSX or ZIP.
                                                </span>
                                            </span>
                                            <span class="error repository-required">
                                                We don’t support that file type.
                                                <span class="drag-and-drop-error-info">
                                                    <span class="btn-link">Try again</span> with a GIF, JPEG, JPG, MOV, MP4,
                                                    PNG, CSV, DOCX, FODG, FODP, FODS, FODT, GZ, LOG, MD, ODF, ODG, ODP, ODS,
                                                    ODT, PDF, PPTX, TXT, XLS, XLSX or ZIP.
                                                </span>
                                            </span>
                                            <span class="error too-big">
                                                Yowza, that’s a big file.
                                                <span class="drag-and-drop-error-info">
                                                    <span class="btn-link">Try again</span> with a file smaller than 10MB.
                                                </span>
                                            </span>
                                            <span class="error empty">
                                                This file is empty.
                                                <span class="drag-and-drop-error-info">
                                                    <span class="btn-link">Try again</span> with a file that’s not empty.
                                                </span>
                                            </span>
                                            <span class="error hidden-file">
                                                This file is hidden.
                                                <span class="drag-and-drop-error-info">
                                                    <span class="btn-link">Try again</span> with another file.
                                                </span>
                                            </span>
                                            <span class="error failed-request">
                                                Something went really wrong, and we can’t process that file.
                                                <span class="drag-and-drop-error-info">
                                                    <span class="btn-link">Try again.</span>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="tooltipped tooltipped-nw"
                                            aria-label="Styling with Markdown is supported">
                                            <a class="Link--muted position-relative d-inline"
                                                href="https://guides.github.com/features/mastering-markdown/"
                                                target="_blank" data-ga-click="Markdown Toolbar, click, help"
                                                aria-label="Learn about styling with Markdown">
                                                <svg class="octicon octicon-markdown v-align-bottom" viewBox="0 0 16 16"
                                                    version="1.1" width="16" height="16" aria-hidden="true">
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
                                class="js-preview-panel overflow-auto border-bottom mx-0 my-3 mx-md-2 mb-md-2" hidden="">
                                <input type="hidden" name="path" value="" class="js-path">
                                <input type="hidden" name="line" value="" class="js-line-number">
                                <input type="hidden" name="start_line" value="" class="js-start-line-number">
                                <input type="hidden" name="preview_side" value="" class="js-side">
                                <input type="hidden" name="preview_start_side" value="" class="js-start-side">
                                <input type="hidden" name="start_commit_oid" value="" class="js-start-commit-oid">
                                <input type="hidden" name="end_commit_oid" value="" class="js-end-commit-oid">
                                <input type="hidden" name="base_commit_oid" value="" class="js-base-commit-oid">
                                <input type="hidden" name="comment_id" value="" class="js-comment-id">
                                <div class="comment js-suggested-changes-container" data-thread-side="">
                                    <div class="comment-body markdown-body js-preview-body">
                                        <p>Nothing to preview</p>
                                    </div>
                                </div>

                            </div>


                            <div class="comment-form-error mb-2 js-comment-update-error" hidden=""></div>
                        </tab-container>


                        <div class="flex-items-center flex-justify-end mx-md-2 mb-2 px-0 d-md-flex">
                            <div class="d-flex flex-items-center flex-auto mb-3 mb-md-0"><a class="tabnav-extra p-0 m-0"
                                    target="_blank" data-ga-click="Markdown Toolbar, click, help"
                                    href="https://guides.github.com/features/mastering-markdown/"><svg
                                        class="octicon octicon-markdown v-align-bottom" viewBox="0 0 16 16" version="1.1"
                                        width="16" height="16" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M14.85 3H1.15C.52 3 0 3.52 0 4.15v7.69C0 12.48.52 13 1.15 13h13.69c.64 0 1.15-.52 1.15-1.15v-7.7C16 3.52 15.48 3 14.85 3zM9 11H7V8L5.5 9.92 4 8v3H2V5h2l1.5 2L7 5h2v6zm2.99.5L9.5 8H11V5h2v3h1.5l-2.51 3.5z">
                                        </path>
                                    </svg> Styling with Markdown is supported</a></div>
                            <div>
                                <button type="submit" id="submit" class="btn btn-primary" data-disable-invalid=""
                                    data-disable-with="">
                                    Start discussion
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex-shrink-0 col-12 col-md-3">
            <div class="discussion-sidebar-item js-discussion-sidebar-item">
                <div class="text-bold mb-2">Helpful resources</div>
                <ul class="list-style-none">
                    <li class="pb-1 text-bold">
                        <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16"
                            class="octicon octicon-file-code pr-1">
                            <path fill-rule="evenodd"
                                d="M4 1.75C4 .784 4.784 0 5.75 0h5.586c.464 0 .909.184 1.237.513l2.914 2.914c.329.328.513.773.513 1.237v8.586A1.75 1.75 0 0114.25 15h-9a.75.75 0 010-1.5h9a.25.25 0 00.25-.25V6h-2.75A1.75 1.75 0 0110 4.25V1.5H5.75a.25.25 0 00-.25.25v2.5a.75.75 0 01-1.5 0v-2.5zm7.5-.188V4.25c0 .138.112.25.25.25h2.688a.252.252 0 00-.011-.013l-2.914-2.914a.272.272 0 00-.013-.011zM5.72 6.72a.75.75 0 000 1.06l1.47 1.47-1.47 1.47a.75.75 0 101.06 1.06l2-2a.75.75 0 000-1.06l-2-2a.75.75 0 00-1.06 0zM3.28 7.78a.75.75 0 00-1.06-1.06l-2 2a.75.75 0 000 1.06l2 2a.75.75 0 001.06-1.06L1.81 9.25l1.47-1.47z">
                            </path>
                        </svg>
                        <a href="/tailwindlabs/tailwindcss/blob/30dc2990c300cf3446ff5d795d47be146b8ee413/.github/CONTRIBUTING.md"
                            data-ga-click="New discussion, click contributing link in sidebar (helpful resources), repo:tailwindlabs/tailwindcss"
                            data-hydro-click="{&quot;event_type&quot;:&quot;discussions.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;NEW_DISCUSSION_VIEW&quot;,&quot;target&quot;:&quot;COMMUNITY_LINK&quot;,&quot;current_repository_id&quot;:106017343,&quot;discussion_repository_id&quot;:null,&quot;originating_url&quot;:&quot;https://github.com/tailwindlabs/tailwindcss/discussions/new&quot;,&quot;user_id&quot;:19477966}}"
                            data-hydro-click-hmac="deb21cb94a201be09461ead40ea2f8d86aa456e2564c0e3c1169692f7863222a">Contributing</a>
                    </li>
                    <li class="pb-1 text-bold">
                        <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16"
                            class="octicon octicon-checklist pr-1">
                            <path fill-rule="evenodd"
                                d="M2.5 1.75a.25.25 0 01.25-.25h8.5a.25.25 0 01.25.25v7.736a.75.75 0 101.5 0V1.75A1.75 1.75 0 0011.25 0h-8.5A1.75 1.75 0 001 1.75v11.5c0 .966.784 1.75 1.75 1.75h3.17a.75.75 0 000-1.5H2.75a.25.25 0 01-.25-.25V1.75zM4.75 4a.75.75 0 000 1.5h4.5a.75.75 0 000-1.5h-4.5zM4 7.75A.75.75 0 014.75 7h2a.75.75 0 010 1.5h-2A.75.75 0 014 7.75zm11.774 3.537a.75.75 0 00-1.048-1.074L10.7 14.145 9.281 12.72a.75.75 0 00-1.062 1.058l1.943 1.95a.75.75 0 001.055.008l4.557-4.45z">
                            </path>
                        </svg>
                        <a href="/tailwindlabs/tailwindcss/blob/30dc2990c300cf3446ff5d795d47be146b8ee413/.github/CODE_OF_CONDUCT.md"
                            data-ga-click="New discussion, click code_of_conduct link in sidebar (helpful resources), repo:tailwindlabs/tailwindcss"
                            data-hydro-click="{&quot;event_type&quot;:&quot;discussions.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;NEW_DISCUSSION_VIEW&quot;,&quot;target&quot;:&quot;COMMUNITY_LINK&quot;,&quot;current_repository_id&quot;:106017343,&quot;discussion_repository_id&quot;:null,&quot;originating_url&quot;:&quot;https://github.com/tailwindlabs/tailwindcss/discussions/new&quot;,&quot;user_id&quot;:19477966}}"
                            data-hydro-click-hmac="deb21cb94a201be09461ead40ea2f8d86aa456e2564c0e3c1169692f7863222a">Code of
                            conduct</a>
                    </li>
                    <li class="pb-1 text-bold">
                        <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16"
                            class="octicon octicon-file pr-1">
                            <path fill-rule="evenodd"
                                d="M3.75 1.5a.25.25 0 00-.25.25v11.5c0 .138.112.25.25.25h8.5a.25.25 0 00.25-.25V6H9.75A1.75 1.75 0 018 4.25V1.5H3.75zm5.75.56v2.19c0 .138.112.25.25.25h2.19L9.5 2.06zM2 1.75C2 .784 2.784 0 3.75 0h5.086c.464 0 .909.184 1.237.513l3.414 3.414c.329.328.513.773.513 1.237v8.086A1.75 1.75 0 0112.25 15h-8.5A1.75 1.75 0 012 13.25V1.75z">
                            </path>
                        </svg>
                        <a href="https://docs.github.com/articles/github-community-guidelines"
                            data-ga-click="New discussion, click github_community_guidelines link in sidebar (helpful resources), repo:tailwindlabs/tailwindcss"
                            data-hydro-click="{&quot;event_type&quot;:&quot;discussions.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;NEW_DISCUSSION_VIEW&quot;,&quot;target&quot;:&quot;COMMUNITY_LINK&quot;,&quot;current_repository_id&quot;:106017343,&quot;discussion_repository_id&quot;:null,&quot;originating_url&quot;:&quot;https://github.com/tailwindlabs/tailwindcss/discussions/new&quot;,&quot;user_id&quot;:19477966}}"
                            data-hydro-click-hmac="deb21cb94a201be09461ead40ea2f8d86aa456e2564c0e3c1169692f7863222a">GitHub
                            Community Guidelines</a>
                    </li>
                </ul>
            </div>

            <div class="discussion-sidebar-item">
                <span title="Feature Release Label: Beta"
                    class="Label Label--success Label--inline mr-2 color-text-primary px-1">Beta</span>
                <a class="text-small Link--secondary lh-condensed " href="/github/feedback/discussions">Give feedback</a>
            </div>


        </div>
    </div>
@endsection
