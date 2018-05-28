<div class="box">

                    <p class="texto-item"><?php echo $result->descricao; ?></p>
                    <p class="texto-item"><?php echo $result->valor; ?></p>

                    </div>

                    <button name="GetProd" id="alterar" type="submit" name="alterar" onClick="myfunction(this.id)" value="<?php echo $result->id_produto; ?>"​​​​​>Alterar</button>        
                    <button name="Getdelete" id="excluir" type="submit" name="excluir" onClick="myfunction(this.id)" value="<?php echo $result->id_produto; ?>"​​​​​>Excluir</button>
                    
display: block;
color: black;

                <?php foreach ($resultado as $result): ?>
                      
                <?php endforeach; ?>