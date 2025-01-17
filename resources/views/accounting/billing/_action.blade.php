<td>
    <a href="{{ route('billing.show', $model->id) }}" class="btn btn-info btn-xs mb-1">
        <i class="fas fa-eye"></i>
    </a>

    <a href="{{ route('billing.print', $model->id) }}" class="btn btn-dark btn-xs mb-1" target="_blank">
        <i class="fas fa-print"></i>
    </a>

    @if ($model->status == 'Unpaid')
        @can('edit billing')
            <a href="{{ route('billing.edit', $model->id) }}" class="btn btn-primary btn-xs mb-1">
                <i class="fas fa-edit"></i>
            </a>
        @endcan

        @can('delete billing')
            <form action="{{ route('billing.destroy', $model->id) }}" method="post" class="d-inline"
                onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                @csrf
                @method('delete')

                <button class="btn btn-danger btn-xs mb-1">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </form>
        @endcan
    @endif
</td>
