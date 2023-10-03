<x-primary-button data-toggle="modal" data-target="#reportModal{{ $comment->id }}"
    class="bg-yellow-500 dark:bg-yellow-500">Report</x-primary-button>

<!-- Modal for reporting comments -->
<div class="fixed z-10 inset-0 overflow-y-auto" id="reportModal{{ $comment->id }}" style="display: none;">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">


            <!-- Modal content here -->
            <form class="px-4 py-6" action="" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="reason">Reason for Reporting:</label>
                    <input class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="reason" name="reason" type="text" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="content">Additional Comments:</label>
                    <textarea class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="content" name="content" rows="4"></textarea>
                </div>
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="bg-red-500 dark:bg-red-500 hover:bg-red-600 focus:outline-none focus:bg-red-600" type="submit">Submit Report</x-primary-button>
                    <x-primary-button class="ml-2" type="button" data-dismiss="modal">Close</x-primary-button>
                </div>
            </form>

        </div>
    </div>
</div>























