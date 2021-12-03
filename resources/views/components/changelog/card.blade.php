<li id="{{ $release }}">
    <div class="relative pb-8">
        <span class="absolute top-5 left-5 -ml-px h-full w-0.5 bg-gray-200 dark:bg-secondary-700" aria-hidden="true"></span>
        <div class="relative flex items-start space-x-3">
            <div>
                <div class="relative px-1">
                    <div class="h-8 w-8 bg-blue-500 rounded-full ring-8 ring-white dark:ring-secondary-700 flex items-center justify-center">
                        <svg class="text-white h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="min-w-0 flex-1 py-0">
                <div class="text-md text-gray-500">
                    <div>
                        <a class="font-medium text-gray-900 dark:text-gray-400 mr-2"
                            href="https://github.com/wireui/wireui/releases/tag/{{ $release }}">
                            {{ $release }}
                        </a>

                        <a class="my-0.5 relative inline-flex items-center bg-white dark:bg-secondary-700
                                  rounded-full border dark:border-0 border-gray-300 px-3 py-0.5 text-sm">
                            <div class="absolute flex-shrink-0 flex items-center justify-center">
                                <span class="h-1.5 w-1.5 rounded-full {{ $badgeColor }} dark:bg-white" aria-hidden="true"></span>
                            </div>
                            <div class="ml-3.5 font-medium text-gray-900 dark:text-secondary-400 capitalize">{{ $type }}</div>
                        </a>
                    </div>
                    <span class="whitespace-nowrap text-sm">{{ $date }}</span>
                </div>
                <div class="mt-2 text-gray-700 dark:text-gray-400">
                    {{ $description ?? $slot }}
                </div>
            </div>
        </div>
    </div>
</li>
