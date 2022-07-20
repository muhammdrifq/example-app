<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soal 1 Latihan Controller</title>
</head>
<body>

    <fieldset>
        <legend>CNN News</legend>
        @foreach ($menu as $data)
            <ul>
                @foreach ($data['navbar'] as $nav)
                    <li>{{$nav}}</li>
                        <ul>
                            @if ($nav == 'Berita')
                                @foreach ($data['berita'] as $news)
                                <li>{{$news}}</li>
                                    <ul>
                                        @if ($news == 'Olahraga')
                                            @foreach ($data['olga'] as $olga)
                                            <li>{{$olga}}</li>
                                                
                                            @endforeach
                                            
                                        @endif
                                    </ul>
                                    
                                @endforeach
                                
                            @endif
                        </ul>


                @endforeach
            </ul>
            
        @endforeach
    </fieldset>
    
</body>
</html>