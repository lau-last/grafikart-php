</main><!-- /.container -->

<footer>
    <hr>
<?php if (!isset($page)): ?>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="newsletter.php" method="post" class="form-inline">
                <div class="form-group">
                    <input type="email" name="email" placeholder="Entrez votre email" required class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">S'inscrire</button>
            </form>
        </div>
    </div>
    <?php endif; ?>

</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
</body>
</html>