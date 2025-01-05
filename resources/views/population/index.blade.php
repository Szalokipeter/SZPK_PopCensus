<x-layout>
    <h1>Population Census of Hungary in the year 1836</h1>

    <table class="table table-hover table-striped">
        <tbody>
          <tr class="text-center">
              <th>
                  <a href="/population/create">&#10010;</a>
              </th>
              <th>Azonosító</th>
              <th>Kultúra</th>
              <th>Vallás</th>
              <th>Foglalkozás</th>
              <th>Lélekszám</th>
          </tr>
          @foreach ($population as $group)
          <tr>
            <td class="text-center">
                <a href="/population/{{$group->id}}">Módosítás</a>
            </td>
              <td class="text-center"> {{ $group->id }}</td>
              <td class="text-center"> {{ $group->culture}}</td>
              <td class="text-center"> {{$group->religion}}</td>
              <td class="text-center"> {{$group->profession}}</td>
              <td class="text-center"> {{$group->population}}</td>
          </tr>
          @endforeach
      </tbody>
      </table>

</x-layout>
