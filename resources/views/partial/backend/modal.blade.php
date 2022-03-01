<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Prêt à quitter ?</h5>
                <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Sélectionnez "Déconnexion" ci-dessous si vous êtes prêt à mettre fin à votre
                session en cours.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Annuler</button>
                <a href="javascript:void(0);" class="btn btn-danger"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Déconnexion</a>
                <form action="{{ route('logout') }}" method="POST" id="logout-form" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
