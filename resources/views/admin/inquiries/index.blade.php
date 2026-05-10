@extends('admin.layout')

@section('content')
    <div class="mb-4">
        <h2 class="fw-bold">Consultation Requests</h2>
        <p class="text-muted">View messages from students through the Consultation form.</p>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th class="ps-4">Date</th>
                            <th>Student Name</th>
                            <th>Interests</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($inquiries as $inquiry)
                            <tr>
                                <td class="ps-4 text-muted">{{ $inquiry->created_at->format('M d, Y') }}</td>
                                <td>
                                    <div class="fw-bold">{{ $inquiry->name }}</div>
                                    <small class="text-muted">{{ $inquiry->email }}</small>
                                </td>
                                <td>{{ $inquiry->subject ?? 'General Inquiry' }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('inquiries.show', $inquiry) }}"
                                            class="btn btn-sm btn-outline-primary">
                                            <i class="fas fa-eye"></i> View
                                        </a>
                                        <form action="{{ route('inquiries.destroy', $inquiry) }}" method="POST"
                                            onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-4 text-muted">No inquiries yet.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        @if($inquiries->hasPages())
            <div class="card-footer bg-white py-3">
                {{ $inquiries->links() }}
            </div>
        @endif
    </div>
@endsection