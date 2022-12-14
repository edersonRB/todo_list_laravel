<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tarefas</title>

        <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/8903/8903117.png">


        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">

        

        <div class="relative d-flex flex-column min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0"> 
            
            <h1 class="display-4 text-white mb-3 pb-3 pt-3">
                Lista de Tarefas</br>
            </h1>

            <div class=" mt-3">

                <!--ADICIONAR-->
                <form method="post" action="{{route('saveItem')}}" accept-charset="UTF-8">
                    {{csrf_field()}}
                    <div class="input-group mb-3">
                        <input name="listItem" type="text" required class="form-control" 
                        placeholder="Nova tarefa" aria-label="Nova tarefa" 
                        aria-describedby="basic-addon2" oninvalid="this.setCustomValidity('Escreva sua tarefa aqui')"
                        oninput="this.setCustomValidity('')">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Adicionar</button>
                        </div>
                    </div>  
                </form>

                <!--LISTA DE TAREFAS-->
                <table class="table table" style="color:white">
                        <tbody>

                            <!--TAREFAS N??O CONCLUIDAS-->
                            @foreach ($listItems as $listItem)
                                @if (!$listItem->is_complete)
                                    <tr style="text-align: center;">
                                        <td style="vertical-align: middle;">
                                            <form method="post" action="{{route('editItem',['id' => $listItem->id])}}">
                                                {{csrf_field()}}    
                                                <input name="editingItem" value="{{$listItem->name}}" onChange="this.form.submit()" class="form" type="text" maxlength="60" style="color:white;background-color: rgba(0, 0, 0, 0.2);"">                                            
                                            </form>
                                        </td>
                                        <td style="vertical-align: middle;">
                                            <form method="post" action="{{route('markComplete',$listItem->id)}}" accept-charset="UTF-8">
                                                {{csrf_field()}}
                                                <input onChange="this.form.submit()" type="checkbox">
                                            </form>
                                        </td>
                                        <td>
                                            <form method="post" action="{{route('deleteItem',$listItem->id)}}" accept-charset="UTF-8">
                                                {{csrf_field()}}
                                                <button class="btn" and style="background-color:transparent; color:white" type="sibmit">X</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach

                            <!--TAREFAS CONCLUIDAS-->
                            @foreach ($listItems as $listItem)
                                @if ($listItem->is_complete)
                                    <tr style="text-align: center;">
                                        <td style="vertical-align: middle;">
                                            <form method="post" action="{{route('editItem',['id'=> $listItem->id])}}">
                                                {{csrf_field()}}    
                                                <input name="editingItem" value="{{$listItem->name}}" onChange="this.form.submit()" maxlength="60" class="form" type="text" style="color:white; text-decoration: line-through;background-color: rgba(0, 0, 0, 0.2);"">
                                            </form>
                                        </td>

                                        <td style="vertical-align: middle;">
                                            <form method="post" action="{{route('markIncomplete',$listItem->id)}}" accept-charset="UTF-8">
                                                {{csrf_field()}}
                                                <input onChange="this.form.submit()" type="checkbox" checked>
                                            </form>
                                        </td>
                                        <td>
                                            <form method="post" action="{{route('deleteItem',$listItem->id)}}" accept-charset="UTF-8">
                                                    {{csrf_field()}}
                                                    <button class="btn" and style="background-color:transparent; color:white" type="sibmit">X</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
        
        <!-- Footer -->
        <footer class="dark:bg-gray-800 text-center text-white">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Social media -->
            <section class="mb-4">
            <!-- Facebook --
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="fab fa-facebook-f"></i
            ></a>

            <!-- Twitter --
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="fab fa-twitter"></i
            ></a>

            <!-- Email -->
            <a class="btn btn-outline-light btn-floating m-1" href="mailto:edersonrenan2003@hotmail.com" role="button"
                ><i class="far fa-envelope"></i
            ></a>

            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/ederson_rb/" role="button"
                ><i class="fab fa-instagram"></i
            ></a>

            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/%C3%A9derson-bomfim-3814a3195/" role="button"
                ><i class="fab fa-linkedin-in"></i
            ></a>

            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/edersonRB" role="button"
                ><i class="fab fa-github"></i
            ></a>
            </section>
            <!-- Section: Social media -->

            <!-- Section: Text -->
            <section class="mb-4">
            <p>
                Projeto desenvolvido com a finalidade de aprender php, o framework laravel
                e as principais tecnologias utilizadas em conjunto: como bootstrap e blade.
            </p>
            </section>
            <!-- Section: Text -->

        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            ?? <?php echo date('Y') ?>  Copyright: 
            <a class="text-white">edersonRB</a>
        </div>
        <!-- Copyright -->
        </footer>
        <!-- Footer -->

    </body>
</html>
