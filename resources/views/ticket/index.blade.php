<x-app-layout>
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-400 dark:bg-gray-900">
   <div class="flex justify-between w-full sm:max-w-xl">

      <h1 class="text-gray-700 text-lg font-bold">Support tickets</h1>
      <div>
         <a href="{{ route('ticket.create') }}" class="bg-gray-800 border p-2 rounded-md font-semibold text-white">Create New</a>
      </div>
   </div>
   <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
      @forelse ($tickets as $ticket)
         <div class="flex justify-between py-2">
            <a href="{{ route('ticket.show', $ticket->id) }}"> {{ $ticket->title }} </a>
            <p>{{ $ticket->created_at->diffForHumans() }} </p>
         </div>
      @empty
         <p>You don't have any support ticket yet.</p>
      @endforelse 
      
   </div>
</div>
</x-app-layout>
