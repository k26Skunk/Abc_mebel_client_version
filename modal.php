    <div class="modal fade bs-example-modal-md" tabindex="-1" id="callback" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Оставьте вашу заявку и мы перезвоним Вам</h4>
                </div>
                <div class="modal-body">
                    <form class="forms" action="mail/callback.php" method="POST" name="form2" enctype="multipart/form-data">
                        <label>
                            <input type="text" name="name" required placeholder="Ваше имя">
                        </label>
                        <label>
                            <input type="text" name="phone" required placeholder="Контактный телефон">
                        </label>
                        <div class="button_submit">
                            <button type="submit" name="send">Заказать звонок</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bs-example-modal-md" tabindex="-1" id="zakaz" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Оставьте вашу заявку и мы перезвоним Вам</h4>
                </div>
                <div class="modal-body">
                    <form class="forms" action="mail/zakaz.php" method="POST" name="form4" enctype="multipart/form-data">
                        <label>
                            <input type="text" name="name" required placeholder="Ваше имя">
                        </label>
                        <label>
                            <input type="text" name="phone" required placeholder="Ваш телефон">
                        </label>
                        <label>
                            <input type="text" name="txtFormEmail" required placeholder="E-mail">
                        </label>
                        <textarea name="message" class="form-control" rows="3" required placeholder="Вопрос или комментарий (необязательно)"></textarea>
                        <div class="button_submit">
                            <button type="submit" name="send">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade bs-example-modal-md" tabindex="-1" id="question" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Оставьте вашу заявку и мы перезвоним Вам</h4>
                </div>
                <div class="modal-body">
                    <form class="forms" action="mail/question.php" method="POST" name="form5" enctype="multipart/form-data">
                        <label>
                            <input type="text" name="name" required placeholder="Ваше имя">
                        </label>
                        <label>
                            <input type="text" name="phone" required placeholder="Ваш телефон">
                        </label>
                        <label>
                            <input type="text" name="txtFormEmail" required placeholder="E-mail">
                        </label>
                        <textarea name="message" class="form-control" rows="3" required placeholder="Вопрос или комментарий (необязательно)"></textarea>
                        <div class="button_submit">
                            <button type="submit" name="send">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>