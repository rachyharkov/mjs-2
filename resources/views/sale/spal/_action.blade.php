<td>
    @can('edit spal')
        <a href="{{ route('spal.edit', $model->id) }}" class="btn btn-primary btn-xs mb-1">
            <i class="fas fa-edit"></i>
        </a>
    @endcan

    @can('delete spal')
        <form action="{{ route('spal.destroy', $model->id) }}" method="post" class="d-inline"
            onsubmit="return confirm('Yakin ingin menghapus data ini?')">
            @csrf
            @method('delete')

            <button class="btn btn-danger btn-xs mb-1">
                <i class="fas fa-trash-alt"></i>
            </button>
        </form>
    @endcan
</td>
