<x-layout title="TOP | つぶやきアプリ">
  <x-layout.single>
    <h2 class="text-center text-blue-500 text-4xl font-bold my-8">つぶやきアプリ</h2>
    <x-tweet.form.post />
    <x-tweet.list :tweets="$tweets" />
  </x-layout.single>
</x-layout>
