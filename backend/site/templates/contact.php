<?php snippet('header') ?>

    <section>
        <div class="wrapper__text">
            <h2 class="alpha blogs__title"><?php echo( $page->heading() ) ?></h2>
            <p class="lettrine">
                <?php echo( $page->text() ) ?>
            </p>

            <?php if( $alert ): ?>
                <div class="form__errors">
                    <ul>
                        <?php foreach($alert as $message): ?>
                            <li><?php echo html($message) ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php endif ?>

            <?php if( $sended ): ?>
                <div class="forms--height">
                    <div class="form__sended">
                        <p>
                            Votre message à été envoyé avec succès&nbsp;! J'attends de le recevoir avec grande impatience et j'espère pouvoir répondre dans les plus brefs délais. À très bientôt&nbsp;!
                        </p>
                    </div>
                </div>
            <?php else: ?>
                <form class="form" method="post">
                    <div class="correct__inline-block">
                        <div class="inline-block form__element">
                            <label for="name" class="epsilon label__text">Nom et prénom</label>
                            <input id="name" name="name" value="<?php echo( get('name') ) ?>" type="text" placeholder="John Doe" class="input__text">
                        </div>
                        <div class="inline-block form__element">
                            <label for="email" class="epsilon label__text">Adresse mail</label>
                            <input id="email" name="email" value="<?php echo( get('email') ) ?>" type="text" placeholder="John.Doe@gmail.com" class="input__text">
                        </div>
                    </div>
                    <div class="block form__element--fullSize">
                        <label for="text" class="epsilon label__text">Que désiez-vous&nbsp;?</label>
                        <textarea id="text" name="text" rows="10" placeholder="Une question ? Une demande ? N'importe quoi ?!" class="input__text"><?php echo( get('text') ) ?></textarea>
                    </div>
                    <div class="block form__element--fullSize">
                        <input type="submit" name="submit" value="Envoyer votre message" class="input__submit">
                    </div>
                </form>
            <?php endif ?>

        </div>
    </section>

<?php snippet('footer') ?>
