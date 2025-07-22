<div>
    {{-- The whole world belongs to you. --}}
    <div class="card" style="width: auto;">
        <div class="card-body">
            <table class="table" id="data">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->email}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->role}}</td>
                        </tr>
                    @endforeach

                </tbody>

            </table>

        </div>
        <script>
            new DataTable('#data');
        </script>
    </div>
</div>
