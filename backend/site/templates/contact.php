<?php snippet('header') ?>

    <section>
        <div class="wrapper__text">
            <h2 class="alpha blogs__title"><?php echo( $page->heading() ) ?></h2>
            <p class="lettrine">
                <?php echo( $page->text() ) ?>
            </p>
            <form class="form">
                <div class="correct__inline-block">
                    <div class="inline-block form__element">
                        <label for="name" class="epsilon label__text">Nom et prénom</label>
                        <input id="name" type="text" placeholder="John Doe" class="input__text">
                    </div>
                    <div class="inline-block form__element">
                        <label for="mail" class="epsilon label__text">Adresse mail</label>
                        <input id="mail" type="text" placeholder="John.Doe@gmail.com" class="input__text">
                    </div>
                </div>
                <div class="block form__element--fullSize">
                    <label for="subject" class="epsilon label__text">Que désiez-vous&nbsp;?</label>
                    <textarea id="subject" rows="10" placeholder="Une question ? Une demande ? N'importe quoi ?!" class="input__text"></textarea>
                </div>
                <div class="block form__element--fullSize">
                    <input type="submit" value="M'inscrire" class="input__submit">
                </div>
            </form>
        </div>
    </section>

<?php snippet('footer') ?>
