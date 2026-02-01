@props (['breadcrumb'=>[]])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- font awesome-->
            <script src="https://kit.fontawesome.com/14629a0a0a.js" crossorigin="anonymous"></script>
            
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
</head>
<body x-data="{
open:false,
}"

:class="{'overflow-hidden':open,}"

:class="sm:overflow-auto">
    
@include('layouts.includes.admin.navigation');

@include('layouts.includes.admin.sidebar');

<div class="p-4 sm:ml-64">
    <div class="mt-14">
        @include('layouts.includes.admin.breadcrumb')

        <div class="p-4 border-1 border-default border-dashed rounded-base">
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, nobis! Esse, ab similique et quae doloremque corporis? Ipsa, praesentium voluptatibus quo tempora maiores doloribus voluptate animi, nostrum quisquam asperiores itaque.</P>
            <P>Quidem accusantium delectus, voluptatum dolor, quas vitae suscipit repellat, accusamus aliquam saepe necessitatibus quo. Animi magni eligendi architecto illo a deserunt sequi aut repellat? Rerum pariatur autem quod voluptatum porro.</P>
            <P>Exercitationem delectus nemo quibusdam debitis aliquid, fuga nam! Incidunt, dolor aut delectus neque, inventore, aliquam nam aliquid voluptatem veniam aspernatur minus. Expedita harum, rerum quis explicabo accusantium dolor maiores quo?</P>
            <P>Commodi deleniti sint consectetur, nam facere temporibus a dolor nisi suscipit illo aperiam explicabo. Itaque amet molestiae iusto officiis. Corporis asperiores nulla repellat eum, error et eius saepe soluta cumque?</P>
            <P>Officia consectetur deserunt repellat sapiente itaque obcaecati perspiciatis officiis adipisci tempora sequi accusamus tempore molestias quod facere assumenda voluptas fugit error placeat minus fuga sint sit, dolorum nemo tenetur? Natus.</P>
            <P>Voluptatem fugiat eligendi nobis, sed reiciendis quidem odio voluptas excepturi totam cupiditate reprehenderit, illo aperiam expedita? Quae praesentium nostrum pariatur inventore quia repellat, aperiam corrupti! Assumenda amet voluptatibus neque animi.</P>
            <P>Iste voluptates dignissimos aliquid praesentium ipsum. Ipsa aliquid minima a ullam, facere nobis, possimus molestias, similique earum incidunt tempora sit hic aliquam repudiandae odio. Similique nam aperiam magnam odit tempora!</P>
            <P>Consectetur doloribus similique itaque dignissimos mollitia provident deleniti laudantium consequatur cupiditate dolorum expedita nisi, placeat obcaecati iusto possimus quisquam vitae nulla illum porro. Ipsum alias ad commodi tempore, accusantium aspernatur!</P>
            <P>Eaque fuga quos rem? Ut laboriosam enim nihil explicabo nobis. Excepturi accusamus enim dolores labore, perferendis quaerat, illum harum assumenda, pariatur totam amet iure saepe. Minus nostrum expedita distinctio eos.</P>
            <P>Ut facilis aut enim corporis temporibus nihil sapiente repellat iure perferendis! Consequuntur quidem, voluptate perspiciatis nihil architecto ipsum. Animi soluta omnis illum vel cum ut quod maiores perferendis debitis repellat?</P>
            <P>Repellendus fugit voluptatibus eum animi minima vero, dolorum nesciunt quo sunt! Perferendis delectus excepturi iusto dolorem doloremque! Sed rem praesentium eius magnam ipsum, eos non reprehenderit sapiente cum nemo corrupti?</P>
            <P>Minus, veniam cum aperiam placeat commodi repudiandae quos fugiat facere ex reiciendis quod? Velit, perspiciatis! Ex, cum officiis, atque voluptates esse laudantium et dignissimos pariatur, consectetur excepturi nisi amet modi!</P>
            <P>Exercitationem temporibus voluptates repudiandae dolorem earum, atque eos provident eius ea optio error. Nisi, reprehenderit ea. Repudiandae, natus est rem maxime accusantium veniam dolor, ullam minima sapiente non vitae consequuntur.</P>
            <P>Impedit rem accusamus aliquam numquam voluptatibus obcaecati minima, alias fugiat architecto, at placeat vero ea molestiae natus laborum quia quidem dolorum explicabo saepe beatae, perspiciatis commodi? Rem laborum ipsam odit!</P>
            <P>Harum dicta voluptatem ad qui doloribus esse minima commodi, ratione animi tenetur placeat ex reprehenderit velit fuga voluptate error quis quam hic ab? Laboriosam ipsum, provident tempora ab aspernatur beatae.</P>
            <P>Doloribus eligendi aut nam beatae autem? Similique eveniet omnis beatae repudiandae ut tenetur enim quasi aliquam impedit, possimus perspiciatis voluptatum mollitia rerum, voluptate tempore maiores alias rem quibusdam ex sint!</P>
            <P>Explicabo suscipit officiis qui alias optio dolorem, nulla ipsa nisi hic. Minus ea autem placeat minima corporis, ut aliquid voluptatem sed a quidem reprehenderit, quod aperiam, odit unde quisquam atque.</P>
            <P>Esse ratione necessitatibus qui voluptatum? Blanditiis corporis labore inventore architecto et eligendi amet obcaecati iusto tenetur molestias vero ut, quisquam repellat non eum dicta similique libero laboriosam ipsam, magni sequi.</P>
            <P>Error reprehenderit, quasi asperiores possimus quaerat, laboriosam necessitatibus enim dignissimos exercitationem quo dolorem, nesciunt commodi itaque aspernatur beatae repellat nam doloribus iste. Debitis laudantium ab cum maiores id ut mollitia?</P>
            <P>Beatae hic nisi error recusandae, quasi ut sint est ab necessitatibus quam temporibus illum eum quidem perspiciatis natus provident. Cupiditate, nesciunt! Ipsum reiciendis quos iure praesentium earum. Cumque, rerum obcaecati.</P>
            

        </div>
    </div>
</div>

<div x-cloak 
x-show="open"
x-on:click="open=false"
class="bg-gray-900 bg-opacity-50 fixed inset-0 z-30 sm:hidden"></div>
      @stack('modals')

      @livewireScripts

</body>
</html>