<x-tests.app>
  <x-slot name='header'>
    ヘッダー1
  </x-slot>
コンポーネント1

  <x-tests.card title="タイトル1" content="本分1" :message="$message"></x-tests.card>
  <x-tests.card title="タイトル2" ></x-tests.card>
  <x-tests.card title="CSSを変更したい" class="bg-red-300"></x-tests.card>
</x-tests.app>